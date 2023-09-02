<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\vegan_actions; // Replace with your actual model

class VeganActionItemList extends Component
{
    public $items;

    public function mount()
    {
        $this->items = vegan_actions::all(); // Replace with your model and query
        // dd($this->items);
    }

    public function render()
    {
        return view('livewire.vegan-action-item-list');
    }
}

