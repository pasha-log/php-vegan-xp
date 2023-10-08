<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rewards;

class VeganRewardsItemList extends Component
{

    public $items;

    public function mount()
    {
        $this->items = Rewards::all(); // Replace with your model and query
    }

    public function render()
    {
        return view('livewire.vegan-rewards-item-list');
    }
}
