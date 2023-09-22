<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User; // Import your User model 

class UserTable extends Component
{
    public function render()
    {
        $users = User::all()
        ->sortByDesc(function ($user) {
            return $user->calculateTotalAccumulatedXP();
        });

        return view('livewire.user-table', compact('users'));
    }
}