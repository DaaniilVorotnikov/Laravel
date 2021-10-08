<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        $id = 2;

        $posts = DB::table('posts')
            ->where('id', '=', 5)
            ->update(['title' => 'New up', 'body' => 'New up']);

            // ->where('id', $id)
            // ->count();

            // ->find($id);

            // ->orderBy('created_at', 'desc')
            // ->first();
        
           // ->latest()
           // ->get();
           // ->orderBy('title', 'asc')
            // ->get();

            // ->select('title')
            // ->distinct()
            // ->get();
            // ->whereNotNull('title')
            // ->get();
            // ->whereBetween('id', [1, 3])
            // ->get();

            // ->where('created_at', '>', now()->subDay())
            // ->orWhere('title', 'Proof.')
            // ->get();
            // ->select('body')
            // ->get();
            // ->where('id', $id)
            // ->get();

        dd($posts);
    }
}
