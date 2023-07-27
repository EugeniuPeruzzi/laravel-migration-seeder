<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bonus;

class BonusController extends Controller
{
    public function index(){
        $bonus_tains = Bonus::all();
        return view('bonuspage', compact('bonus_trains'));
    }
}
