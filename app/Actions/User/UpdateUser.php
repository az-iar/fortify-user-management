<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateUser
{
    use AsAction;

    public function handle(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', Rule::unique('users')->ignoreModel($user)],
        ]);

        $user->update($data);

        return redirect()->route('users.index');
    }
}
