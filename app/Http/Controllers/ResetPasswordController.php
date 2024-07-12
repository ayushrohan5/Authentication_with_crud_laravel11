<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CustomResetPasswordNotification;
use Illuminate\Support\Facades\Str;
use App\Models\User;

class ResetPasswordController extends Controller
{
    //
    public function showResetForm(Request $request)
{
    return view('resetpass');
}
// app/Http/Controllers/Auth/ResetPasswordController.php
public function reset(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email'),
            function ($user, $token) {
                Notification::send($user, new CustomResetPasswordNotification($token));
            }
        );

        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('account.login')->with('success', 'Password link mailed successfully')
            : redirect()->route('resetpass')->withErrors(['email' => __($status)]);
    
}
public function showResetForm2(Request $request)
{
    return view('reset');
}

public function updatepass(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'token' => 'required',
        'password' => 'required|confirmed|min:3',
    ]);

    // Manually generated token
    $customToken = $request->input('token'); // Replace with your actual custom token

    if ($request->token !== $customToken) {
        return back()->withErrors(['token' => 'Invalid token.']);
    }

    // Find the user by email
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors(['email' => 'Email not found.']);
    }

    // Update user's password
    $user->password = bcrypt($request->password);
    $user->save();

    return redirect()->route('account.login')->with('success', 'Password reset successfully.');
}
}
