<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\vegan_actions; 

class VeganActionItemList extends Component
{
    public $items;

    public function mount()
    {
        $this->items = vegan_actions::all(); 
        // dd($this->items);
    }

    public function render()
    {
        return view('livewire.vegan-action-item-list');
    }
}

