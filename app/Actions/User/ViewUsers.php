<?php

namespace App\Actions\User;

use Lorisleiva\Actions\Concerns\AsAction;

class ViewUsers
{
    use AsAction;

    public function handle()
    {
        return view('users.index');
    }
}
