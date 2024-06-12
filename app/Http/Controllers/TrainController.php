<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        // $today = now();

        $trains = Train::all();
        // $trains = Train::where("data_partenza", "=", $today)->get();
        return view('trains', compact('trains'));
    }
}
