<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = DB::table('destinations')->simplePaginate(6);
        return view('home', [
            'destinations' => $destinations, 
        ]);
    }
}
