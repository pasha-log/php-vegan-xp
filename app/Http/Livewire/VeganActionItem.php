<?php

namespace App\Http\Livewire;

use App\Models\CompletedVeganActions;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class VeganActionItem extends Component
{
    public $item;
    public array $completedVeganActions = [];
    public $totalVeganXP;

    public function mount($item)
    {
        
        $this->item = $item;
    }
    
    public function render()
    {
        return view('livewire.vegan-action-item');
    }

    public function processCompletedVeganActionData($veganActionId)
    {   
        try {
            if (auth()->check()) {
                
                $user = auth()->user()->username;
    
                $record = new CompletedVeganActions();
                $record->setTable('completed_vegan_actions');
                $record->username = $user;
                $record->vegan_action_id = $veganActionId;
                $record->save();

                // Emit an event to tell Livewire to refresh this component
                $this->emit('refreshComponent');
            }
        } catch (\Exception $e) {
            Log::error('Error processing vegan action data: ' . $e->getMessage());
        }
    }

    public function refreshComponent()
    {
        if (auth()->check()) {
            $user = auth()->user();
            $completedActions = $user->completedVeganActions;
    
            if ($completedActions && !$completedActions->isEmpty()) {
                $this->completedVeganActions = $completedActions->pluck('vegan_action_id')->toArray();
            }
        }
    }
}


