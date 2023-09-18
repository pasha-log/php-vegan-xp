<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class ProfileController extends Controller
{

    public $completedVeganActions = [];

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        if (Auth::check()) {
            $user = Auth::user();

            $totalVeganXP = $this->calculateTotalXP();
            
            return view('profile', compact('user', 'totalVeganXP'));
        } else {
            return redirect('/login'); // Redirect to the login page if the user is not authenticated
        }
    }
    
    public function editProfile(Request $request) {
        if (auth()->check()) {
            
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

        } else {
            return redirect('/login'); // Redirect to the login page if the user is not authenticated
        }
    }

    public function calculateTotalXP() {
        if (Auth::check()) {
            $user = Auth::user();
            $completedActionIds = $user->completedVeganActions->pluck('vegan_action_id');
            
            // Calculate the total vegan XP by summing xp_amount
            $totalVeganXP = DB::table('vegan_actions')
            ->whereIn('id', $completedActionIds)
            ->sum('xp_amount');

            // dd($totalVeganXP);
            
            return $totalVeganXP;
            
        } else {
            return redirect('/login'); // Redirect to the login page if the user is not authenticated
        }
    }
}
