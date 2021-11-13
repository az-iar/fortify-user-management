<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class AddUserModal extends Component
{
    public bool $open = false;

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    protected $listeners = ['show'];

    public function mount()
    {
        $this->name = old('name', '');
        $this->email = old('email', '');
    }

    public function render()
    {
        return view('livewire.user.add-user-modal');
    }

    public function show()
    {
        $this->open = true;
    }

    public function close()
    {
        info('close');
        $this->open = false;
    }
}
