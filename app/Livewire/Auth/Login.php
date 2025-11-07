<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended('/dashboard/ajouter-condidature');

        }
        $this->reset('password');
        


        $this->addError('email', 'Les identifiants sont incorrects.');
    }
    public function render()
    {
        return view('livewire.auth.login')->layout('livewire.auth.layout');
    }
}
