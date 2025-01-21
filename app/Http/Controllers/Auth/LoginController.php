<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MagicLink;
use App\Models\User;
use App\Notifications\LoginNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login2');
    }

    public function create(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'exists:' . User::class],
        ]);
        $token = Str::uuid();
        $magicLink = URL::temporarySignedRoute(
            'verify.login',
            now()->addMinutes(10),
            ['token' => $token->toString()]
        );
        Notification::route('mail', $request->email)->notify(new LoginNotification($magicLink));
        MagicLink::create([
            'token' => $token,
            'payload' => encrypt($request->email),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);
        return back()->with(['status' => 'Please check your email for your login link']);
    }

    public function store(Request $request): RedirectResponse
    {
        $e = MagicLink::where('token', $request->token)->first();
        if (($e->count() > 0) && $request->ip() === $e->ip_address) {
            $payload = decrypt($e->payload);
            $user = User::where('email', $payload)->first();
            Auth::login($user);
            return to_route('dashboard');
        }
        abort(401);
    }
}