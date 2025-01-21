<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MagicLink;
use App\Models\User;
use App\Notifications\RegisterNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function create(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
        ]);
        
        $token = Str::uuid();

        $magicLink = URL::temporarySignedRoute(
            'verify.registration',
            now()->addHour(),
            ['token' => $token->toString()]
        );
        Notification::route('mail', $request->email)->notify(new RegisterNotification($magicLink));
        MagicLink::create([
            'token' => $token,
            'payload' => encrypt($request->all()),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);
        return back()->with(['status' => 'Please check your email to complete your registration']);
    }

    public function store(Request $request)
    {
        $e = MagicLink::where('token', $request->token)->first();
        if (($e->count() > 0) && $request->ip() === $e->ip_address) {
            $payload = decrypt($e->payload);
            $user = User::create($payload);
            Auth::login($user);
            return to_route('dashboard');
        }
        abort(401);
    }
}
