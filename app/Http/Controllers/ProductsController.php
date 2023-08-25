<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index() {
        // $title = "Welcome to my Laravel 8 course";
        // $description = "Created by Pasha";

        // $data = [
        //     'productOne' => 'iPhone',
        //     'productTwo' => 'Samsung'
        // ];
        // Compact method
        // return view('products.index', compact('title', 'description'));

        // With method
        // return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        // Directly in the view 
        // return view('products.index', [
        //     'data' => $data
        // ]);

        // print_r(route('products'));
        // return view('products.index');

        // Non fluent 
        // DB::select(['table' => 'posts', 'where' => ['id' => 1]])

        // Fluent
        // DB:table('posts')->where('id', 1)->get()
        // $veganActions = DB::select('SELECT * from vegan_actions WHERE id = ?', [3]);
        // $veganActions = DB::select('SELECT * from vegan_actions WHERE id = :id', ['id' => 3]);
        
        // $id = 3;
        // $veganActions = DB::table('rewards')->insert([
        //     'title' => "Vegan Retreat", 
        //     'description' => "Win a trip to an all-inclusive vegan resort.", 
        //     'xp_requirement' => 10000, 
        //     'icon' => '🌴'
        // ]);
        
        // dd($veganActions);
        // return view('livewire.components.auth.signup-form');
        return view('livewire.components.auth.login-form');
    }

    public function about() {
        return 'About Us Page';
    }

    public function show($name) {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];
        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist.'
        ]);
    }
}
