<?php

namespace App\Http\Livewire\Auth;

use App\Concerns\CheckPasswordStrength;
use Livewire\Component;

class RegisterForm extends Component
{
    use CheckPasswordStrength;

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function mount()
    {
        $this->name = old('name', '');
        $this->email = old('email', '');
    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
