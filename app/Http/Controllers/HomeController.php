<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // return view('home');
        if (Auth::check()) {
            $user = Auth::user();
            // dd($user);
            return view('home', compact('user'));
        } else {
            return redirect('/login'); // Redirect to the login page if the user is not authenticated
        }
    }
}
