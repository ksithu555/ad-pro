<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class VerificationController extends Controller
{
    public function verify(Request $request, $id, $hash)
    {
        $user = User::findOrFail($id);

        if (!hash_equals((string) $hash, sha1($user->email))) {
            Session::flash('error', '無効な検証リンク');
            return redirect('/')->withErrors(['error' => 'Invalid verification link']);
        }

        if ($user->hasVerifiedEmail()) {
            Session::flash('info', 'メールはすでに確認済みです');
            return redirect('/')->with('info', 'Email already verified');
        }

        $user->email_verified_at = now();
        $user->save();

        Session::flash('success', 'メール認証に成功しました');
        return redirect()->route('user.show.login')->with('success', 'メール認証に成功しました');
    }

    public function resend(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->firstOrFail();

        if ($user->hasVerifiedEmail()) {
            Session::flash('info', 'メールはすでに確認済みです');
            return redirect('/')->with('info', 'メールはすでに確認済みです');
        }

        $lastResend = session('last_resend_' . $user->id);

        if ($lastResend && now()->diffInSeconds($lastResend) < 300) { // 300 seconds = 5 minutes
            Session::flash('warning', '確認メールを再送信するには5分待つ必要があります');
            return view('auth.user-register-verify-email', ['user' => $user])->with('warning', 'Please wait 5 minutes before resending the verification email.');
        }

        // Update the last resend time
        session(['last_resend_' . $user->id => now()]);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );

        Mail::to($user->email)->send(new VerifyEmail($user, $verificationUrl));

        Session::flash('success', '確認メールを再送信しました');
        return view('auth.user-register-verify-email', ['user' => $user])->with('success', 'Verification email resent');
    }
}