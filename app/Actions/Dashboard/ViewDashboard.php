<?php

namespace App\Actions\Dashboard;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class ViewDashboard
{
    use AsAction;

    public function handle()
    {
        return view('dashboard', [
            'usersCount' => User::query()->count()
        ]);
    }
}
