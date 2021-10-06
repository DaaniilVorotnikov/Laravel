<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Welcome to my course';
        $description = "Created by Danny";
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        
        //return view('products.index', compact('title', 'description'));
        // return view('products.index') -> with('data', $data);
        return view('products.index',[
            'data' => $data
        ]);
    }
    public function about(){
        return 'About us';
    }
    //
}
