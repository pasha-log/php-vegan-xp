<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\ProfileController;

class VeganRewardsItem extends Component
{

    public $item;
    public $totalVeganXP;
    
    public function mount($item)
    {
        $this->item = $item;
        $this->totalVeganXP = app(ProfileController::class)->calculateTotalXP();
    }
    
    public function render()
    {
        return view('livewire.vegan-rewards-item');
    }
}
