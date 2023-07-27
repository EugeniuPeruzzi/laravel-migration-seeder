<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\Bonus;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        $bonus_trains = Bonus::all();
        return view('home', compact('trains','bonus_trains'));
    }


}
