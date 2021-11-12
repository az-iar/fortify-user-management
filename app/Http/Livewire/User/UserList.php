<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search;

    public $sortBy = 'created_at';

    public $order = 'asc';

    protected $queryString = ['search', 'sortBy', 'order'];

    public function render()
    {
        return view('livewire.user.user-list', [
            'users' => User::query()
                ->when(filled($this->search), function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                })
                ->orderBy($this->sortBy, $this->order)
                ->paginate(),
        ]);
    }

    public function sort($column, $order)
    {
        $this->sortBy = $column;
        $this->order = $order;
    }
}
