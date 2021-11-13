<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class EditUserModal extends Component
{
    public string $userId;

    public User $user;

    public bool $open = false;

    public function mount()
    {
        $this->user = User::query()->find($this->userId);
    }

    public function render()
    {
        return view('livewire.user.edit-user-modal', [
            'user' => $this->user,
        ]);
    }

    public function save()
    {

    }
}
