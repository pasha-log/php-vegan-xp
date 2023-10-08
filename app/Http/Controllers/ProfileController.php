<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\View\View;
use App\Models\VeganActions;
use App\Models\Rewards;

class ProfileController extends Controller
{
    public array $acceptedVeganRewards = [];
    public array $completedVeganActions = [];
    
    public function index(): View {
        $user = Auth::user();
        $totalVeganXP = $this->calculateTotalXP();
        $completedActionIds = $user->completedVeganActions->pluck('vegan_action_id');
        
        // Get the actions completed by the user
        $completedActions = VeganActions::whereIn('id', $completedActionIds)->get();
        $acceptedRewardIds = $user->acceptedVeganRewards->pluck('reward_id');
        
        // Get the rewards accepted by the user
        $acceptedRewards = Rewards::whereIn('id', $acceptedRewardIds )->get();
        return view('profile', compact('user', 'totalVeganXP', 'completedActions', 'acceptedRewards'));
    }
    
    public function editProfile(Request $request) {
        // Find the user by username 
        $user = User::find(auth()->user()->username);
        
        // Update the user's information
        $user->username = $request->input('username'); 
        $user->first_name = $request->input('first_name'); 
        $user->last_name = $request->input('last_name'); 
        $user->email = $request->input('email'); 
        
        // Save the changes to the database
        $user->save();
        
        // Redirect to a success page or show a success message
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }

    public function calculateTotalXP() {
        $user = Auth::user();
        $completedActionIds = $user->completedVeganActions->pluck('vegan_action_id');
        
        // Calculate the total vegan XP by summing xp_amount
        $totalVeganXP = VeganActions::whereIn('id', $completedActionIds)
        ->sum('xp_amount');
        // dd($totalVeganXP);
        $acceptedRewardIds = $user->acceptedVeganRewards->pluck('reward_id');

        // Calculate the total vegan XP by summing xp_amount and subtracting accepted reward xp_requirements
        $totalRewardsXPUsed = Rewards::whereIn('id', $acceptedRewardIds)
        ->sum('xp_requirement');
        
        return $totalVeganXP - $totalRewardsXPUsed;
    }
}
