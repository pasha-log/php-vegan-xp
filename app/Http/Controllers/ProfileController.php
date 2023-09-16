<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\completed_vegan_actions;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{

    public $completedVeganActions = [];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            $completedActionIds = $user->completedVeganActions->pluck('vegan_action_id');
       
            // Calculate the total vegan XP by summing xp_amount
            $totalVeganXP = DB::table('vegan_actions')
            ->whereIn('id', $completedActionIds)
            ->sum('xp_amount');

            return view('profile', compact('user', 'totalVeganXP'));
        } else {
            return redirect('/login'); // Redirect to the login page if the user is not authenticated
        }
    }

    public function editProfile() {

    }
}
