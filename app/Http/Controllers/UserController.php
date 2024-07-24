<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    //Belépési oldal
    public function signInTpl()
    {
        return view('auth.signIn');
    }

    // Belépés
    public function signInPost(Request $request)
    {
        $user = User::all();
        
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
 
        if(Auth::attempt($credential)) {

            return redirect()->intended(route('editService'));
        }
        return redirect(route('sign-in'))->with('error', 'Ön nem regisztrált felhasználó, rossz a megadott email cím, rossz jelszót adott meg! ');
        
    }

    // Regisztrációs oldal
    public function create()
    {
        return view('auth.signUpForm');
    }

    // Regisztráció
    public function signUp(Request $request,)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|',
            //'password' => 'reqired|regex:/^(?=.*\.[A-Za-z0-9])$/'
        ];
        $messages = [
            'min' => 'A karakter neve legalább 3 karakter hosszú legyen.',
            'regex' => 'A karakter neve legalább 1 szóköz legyen.'

            //'password.reqex' => 'A jelszónak tartalmaznia kell kis és nagy betüt, legalább egy darab számot és minimum 6 karakter hosszú kell hogy legyen!'
        ];

        $request->validate($rules, $messages);
        

        $data = $request->all();

        $data = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('sign-in')->with('succes', 'User saved.');

    }

    // Kijelentkezés
    public function logOut(){
        
        Auth::logout();
        return redirect(route('sign-in'));
    }
}
