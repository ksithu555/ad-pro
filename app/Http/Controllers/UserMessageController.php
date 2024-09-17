<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Alarm;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMessageController extends Controller
{

    public function getMessages() {
        $userId = Auth::user()->id;
        $focusUser = null;
        $users = User::with('company')->with('company.businessType')->with('company.purposeType')->with('company.industryType')
        ->with('company.positionType')->with('company.prefecture')->where('id', '!=', $userId)
        ->where(function ($query) use ($userId) {
            $query->whereHas('sentMessages', function ($query) use ($userId) {
                $query->where('to_user_id', $userId)
                    ->orWhere('from_user_id', $userId);
            })
            ->orWhereHas('receivedMessages', function ($query) use ($userId) {
                $query->where('to_user_id', $userId)
                    ->orWhere('from_user_id', $userId);
            });
        })
        ->with(['sentMessages' => function ($query) use ($userId) {
            $query->where('to_user_id', $userId)
                ->orWhere('from_user_id', $userId);
        }, 'receivedMessages' => function ($query) use ($userId) {
            $query->where('to_user_id', $userId)
                ->orWhere('from_user_id', $userId);
        }])
        ->get()
        ->sortByDesc(function ($user) {
            return $user->sentMessages->merge($user->receivedMessages)->max('created_at');
        });
        $messages = Message::where('from_user_id', $userId)->orWhere('to_user_id', $userId)->get();
        return view('users.messages.messages', compact('focusUser', 'users', 'messages'));
    }

    public function startMessage($id) {
        $userId = Auth::user()->id;
        $focusUser = User::with('company')->with('company.businessType')->with('company.purposeType')->with('company.industryType')
        ->with('company.positionType')->with('company.prefecture')->find($id);

        $users = User::with('company')->with('company.businessType')->with('company.purposeType')->with('company.industryType')
        ->with('company.positionType')->with('company.prefecture')->where('id', '!=', $userId)->where('id', '!=', $id)
        ->where(function ($query) use ($userId) {
            $query->whereHas('sentMessages', function ($query) use ($userId) {
                $query->where('to_user_id', $userId)
                    ->orWhere('from_user_id', $userId);
            })
            ->orWhereHas('receivedMessages', function ($query) use ($userId) {
                $query->where('to_user_id', $userId)
                    ->orWhere('from_user_id', $userId);
            });
        })
        ->with(['sentMessages' => function ($query) use ($userId) {
            $query->where('to_user_id', $userId)
                ->orWhere('from_user_id', $userId);
        }, 'receivedMessages' => function ($query) use ($userId) {
            $query->where('to_user_id', $userId)
                ->orWhere('from_user_id', $userId);
        }])
        ->get()
        ->sortByDesc(function ($user) {
            return $user->sentMessages->merge($user->receivedMessages)->max('created_at');
        });

        $messages = Message::where('from_user_id', $userId)->orWhere('to_user_id', $userId)->get();
        return view('users.messages.messages', compact('focusUser', 'users', 'messages'));

        // $conversationExists = Message::
        //     where(function ($query) use ($userId, $id) {
        //         $query->where('from_user_id', $userId)
        //             ->where('to_user_id', $id);
        //     })
        //     ->orWhere(function ($query) use ($userId, $id) {
        //         $query->where('from_user_id', $id)
        //             ->where('to_user_id', $userId);
        //     })
        //     ->exists();
    }

    public function sendMessage(Request $request) {
        $message = Message::create([
            'from_user_id' => Auth::user()->id,
            'to_user_id' => $request->toUserId,
            'message' => $request->message,
            'seen' => 0
        ]);

        Message::where('from_user_id', $request->toUserId)->where('to_user_id', Auth::user()->id)->update(['seen' => 1]);

        $alarm = Alarm::where('from_user_id', Auth::user()->id)
                  ->where('to_user_id', $message->receiver->id)
                  ->where('type', '商談管理')
                  ->first();

        if ($alarm) {
            // Update the existing alarm
            $alarm->related_id = $message->id;
            $alarm->status = 0;
            $alarm->save();
        } else {
            // Create a new alarm
            Alarm::create([
                'type' => '商談管理',
                'alarm' => 'メッセージがあります',
                'from_user_id' => Auth::user()->id,
                'to_user_id' => $message->receiver->id,
                'related_id' => $message->id,
                'model' => 'Message',
                'status' => 0,
            ]);
        }

        // return redirect()->route('user.get.messages');
        return response()->json([
            'message' => nl2br(e($message->message)),
            'created_at' => $message->created_at->format('Y-m-d H:i:s'),
            'from_user' => Auth::user()->name
        ]);
    }

    public function seenMessage($id) {
        Message::where('from_user_id', $id)->where('to_user_id', Auth::user()->id)->update(['seen' => 1]);
        return response()->json(['status' => 'success']);
    }

    public function receivedMessage() {
        $newMessages = Message::where('to_user_id', Auth::user()->id)
                            ->whereNull('auto_load')
                            ->where('seen', 0)
                            ->get();
    
        Message::where('to_user_id', Auth::user()->id)
        ->whereNull('auto_load')
        ->where('seen', 0)
        ->update(['auto_load' => 1]);

        // return response()->json([
        //     'newMessages' => $newMessages,
        // ]);
        $formattedMessages = $newMessages->map(function($message) {
            return [
                'from_user_id' => $message->from_user_id,
                'to_user_id' => $message->to_user_id,
                'message' => nl2br(e($message->message)),
                'created_at' => $message->created_at->format('Y-m-d H:i:s'),
                'seen' => $message->seen == 1 ? '既読' : ''
            ];
        });
    
        return response()->json([
            'newMessages' => $formattedMessages,
        ]);
    }
}
