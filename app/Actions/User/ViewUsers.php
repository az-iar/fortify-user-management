<?php

namespace App\Actions\User;

use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class ViewUsers
{
    use AsAction;

    public function handle(Request $request)
    {
        return view('users.index', [
            'action' => $request->query('action'),
        ]);
    }
}
