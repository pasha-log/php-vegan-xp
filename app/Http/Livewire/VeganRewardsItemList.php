<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\rewards;

class VeganRewardsItemList extends Component
{

    public $items;

    public function mount()
    {
        $this->items = rewards::all(); // Replace with your model and query
    }

    public function render()
    {
        return view('livewire.vegan-rewards-item-list');
    }
}
