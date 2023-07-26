<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\trains;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('home', compact('comics'));
    }

}
