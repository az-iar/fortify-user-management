<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class LoginForm extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $rememberMe = false;

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
