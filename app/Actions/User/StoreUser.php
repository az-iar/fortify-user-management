<?php

namespace App\Actions\User;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreUser
{
    use AsAction;

    public function handle(Request $request)
    {
        $createUser = new CreateNewUser;

        $user = $createUser->create($request->input());

        return redirect()->route('users.index');
    }
}
