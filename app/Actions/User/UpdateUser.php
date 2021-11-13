<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateUser
{
    use AsAction;

    public function handle(Request $request, User $user)
    {
        return redirect()->back();
    }
}
