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

        Session::flash('success', 'メールの確認に成功しました');
        return redirect()->route('user.show.login')->with('success', 'Email verified successfully');
    }

    public function resend(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->firstOrFail();

        if ($user->hasVerifiedEmail()) {
            Session::flash('info', 'メールはすでに確認済みです');
            return redirect('/')->with('info', 'Email already verified');
        }

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id, 'hash' => sha1($user->email)]
        );

        Mail::to($user->email)->send(new VerifyEmail($user, $verificationUrl));

        Session::flash('success', '確認メールを再送信しました');
        return back()->with('success', 'Verification email resent');
    }
}