<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class EditUserModal extends Component
{
    public ?string $userId = null;

    public ?User $user = null;

    public bool $open = false;

    protected $listeners = ['show'];

    public function render()
    {
        return view('livewire.user.edit-user-modal', [
            'user' => $this->user ?? new User(),
            'open' => $this->open,
        ]);
    }

    public function close()
    {
        $this->open = false;
        $this->userId = null;
        $this->user = null;
    }

    public function show($userId)
    {
        $this->userId = $userId;
        $this->user = User::query()->find($this->userId);
        $this->open = true;
    }

    public function save()
    {

    }
}
