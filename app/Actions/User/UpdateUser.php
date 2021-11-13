<?php

namespace App\Actions\User;

use App\Models\User;
use Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'password' => ['nullable', 'min:8', 'confirmed'],
        ]);

        $user->fill(Arr::except($data, 'password'));
        // only save if password field not empty
        if (filled($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        $user->save();

        return redirect()->route('users.index');
    }
}
