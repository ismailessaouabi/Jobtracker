<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $nom;
    public $email;
    public $password;
    public $password_confirmation;

    public function register()
    {
        $this->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //check if user with email already exists
        $check_user = User::where('email', $this->email)->first();
        if ($check_user) {
            session()->flash('error', 'Email already registered.');
            return redirect()->route('register');
        }   

        $user = User::create([
            'name' => $this->nom,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user);
        session()->flash('message', 'Registration successful! Please log in.');

        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.auth.register')->layout('livewire.auth.layout');
    }
}
