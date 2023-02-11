<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Story;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stories=Story::all();
        return view('dashboard',[
            'stories' => $stories
        ]);
    }
}
