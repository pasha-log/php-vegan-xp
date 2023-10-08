<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\VeganActions;

class VeganActionItemList extends Component
{
    public $items;

    public function mount()
    {
        $this->items = VeganActions::all(); 
    }

    public function render()
    {
        return view('livewire.vegan-action-item-list');
    }
}

