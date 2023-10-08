<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RewardsController extends Controller
{
    
    public function index(): View
    {
            $user = Auth::user();
            
            return view('rewards', compact('user'));
    }
}