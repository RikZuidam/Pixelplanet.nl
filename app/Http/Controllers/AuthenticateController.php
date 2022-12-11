<?php

namespace App\Http\Controllers;

use App\Models\Authenticate;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthenticateController extends Controller
{
    public function register(Request $request)
    {
        // Validate Formfields
        $formFields = $request->validate([
            // 'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('authenticate', 'email')],
            'password' => 'required|confirmed|min:3'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = Authenticate::create([
            // 'name' => $formFields['name'],
            'email' => $formFields['email'],
            'email_verified_at' => null,
            'password' => $formFields['password']
        ]);

        // Authentication add login statement
        auth()->login($user);

        // Redirect to Home-Page
        return redirect('/loading')->with('message', 'Welcome ' . $formFields['email']);
    }

    public function login(Request $request)
    {
        // Validate Formfields
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Authenticate
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            // Admin / User
            if(auth()->user()->role == 2) {
                return redirect('/loading')->with('message', 'Youre an admin!');
            } else {
                return redirect('/loading')->with('message', 'You are now logged in!');
            } 
            
        }
// 
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }
}
