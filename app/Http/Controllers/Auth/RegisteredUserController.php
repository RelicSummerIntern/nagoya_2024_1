<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'height' => ['required', 'numeric'], 
            'weight' => ['required', 'numeric'],
            'sex' => ['required','string', 'max:255'],
            'favorite_cotegory' => ['required','string', 'max:255']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'height' => $request->height,
            'weight' => $request->weight,
            'sex' => $request->sex,
            'favorite_cotegory' => $request->favorite_cotegory,
            ]);

        event(new Registered($user));

        Auth::login($user);

        session()->flash('success', '会員登録に成功しました。');

        return redirect(RouteServiceProvider::HOME);
    }
}
