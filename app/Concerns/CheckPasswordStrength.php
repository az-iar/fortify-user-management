<?php

namespace App\Concerns;

trait CheckPasswordStrength
{
    public string $password = '';
    public string $passwordCheckStyle = '';
    public string $passwordCheckMessage = '';

    public function checkPasswordStrength()
    {
        $length = strlen($this->password);

        if ($length < 4) {
            $this->passwordCheckStyle = 'text-red-600';
            $this->passwordCheckMessage = 'Your password is weak. Use longer password';

            return;
        }

        if ($length < 8) {
            $this->passwordCheckStyle = 'text-yellow-600';
            $this->passwordCheckMessage = "Try setting more than 8 character for stronger password";

            return;
        }

        if ($length > 8) {
            $this->passwordCheckStyle = 'text-green-600';
            $this->passwordCheckMessage = "You password is strong";
        }
    }
}