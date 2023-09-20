<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\ProfileController;

class Navbar extends Component
{

    // public $totalVeganXP = 0;

    // public function mount()
    // {
    //     $this->totalVeganXP = app(ProfileController::class)->calculateTotalXP();
    // }
    
    public function render()
    {
        return view('livewire.components.navbar');
    }


}
