<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Méthode pour afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Méthode pour traiter la soumission du formulaire de connexion
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'utilisateur est authentifié
            return redirect()->intended('/dashboard');
        } else {
            // Échec de l'authentification
            return redirect()->back()->withErrors(['email' => 'Adresse e-mail ou mot de passe incorrect']);
        }
    }

    // Méthode pour afficher le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Méthode pour traiter la soumission du formulaire d'inscription
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Votre compte a été créé avec succès. Vous pouvez maintenant vous connecter.');
    }

    // Méthode pour déconnecter l'utilisateur
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
