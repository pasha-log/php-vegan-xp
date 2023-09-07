<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VeganRewardsItem extends Component
{

    public $item;
    
    public function mount($item)
    {
        $this->item = $item;
    }
    
    public function render()
    {
        return view('livewire.vegan-rewards-item');
    }
}
