<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Services\PasswordService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    protected $passwordService;

    public function __construct(PasswordService $passwordService){
        $this->passwordService = $passwordService;
    }
   
    public function create(Request $request,$token): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'token' => ['required'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);


    $reset = DB::table('password_reset_tokens')->get()->first(function ($record) use ($request) {
        return Hash::check($request->token, $record->token);
    });

    if (!$reset) {
        return back()->withErrors(['token' => 'Invalid or expired token.']);
    }

    $user = User::where('email', $reset->email)->first();
    if (!$user) {
        return back()->withErrors(['email' => 'User not found.']);
    }

    $this->passwordService->resetPassword($user, $request->password);

    DB::table('password_reset_tokens')->where('email', $reset->email)->delete();

    return redirect()->route('login')->with('status', 'Password reset successful.');
}
}
