<?php

namespace App\Http\Livewire;

use App\Models\AcceptedRewards;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Log;

class VeganRewardsItem extends Component
{

    public $item;
    public $totalVeganXP;
    public array $acceptedVeganRewards = [];
    
    public function mount($item)
    {
        $this->item = $item;

        $user = Auth::user();

        $this->updateTotalVeganXP($user);

    }
    
    public function render()
    {
        return view('livewire.vegan-rewards-item');
    }

    public function claimReward($rewardId) {
        try {
            if (Auth::check()) {
                $user = auth()->user()->username;

                $record = new AcceptedRewards();
                $record->setTable('accepted_rewards');
                $record->username = $user;
                $record->reward_id = $rewardId;
                $record->save();

                // Emit an event to tell Livewire to refresh this component
                $this->emit('refreshRewardComponent');

            } 
        } catch (\Exception $e) {
            Log::error('Error claiming reward: ' . $e->getMessage());
        }
    }
    
    public function refreshRewardComponent()
    {
        if (Auth::check()) {
            $user = auth()->user();
            $acceptedRewards = $user->acceptedVeganRewards;
            // dd("Reached");
            
            if ($acceptedRewards && !$acceptedRewards->isEmpty()) {
                $this->acceptedVeganRewards = $acceptedRewards->pluck('reward_id')->toArray();

                $this->updateTotalVeganXP();
            }
        }
    }

    private function updateTotalVeganXP() {
        $this->totalVeganXP = app(ProfileController::class)->calculateTotalXP();
    }
}
