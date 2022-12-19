<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $destinations = DB::table('destinations')->simplePaginate(6);
        return view('home', [
            'destinations' => $destinations, 
        ]);
    }

    public function news()
    {
        $news = News::simplePaginate(4)->sortByDesc('created_at');
        // $news = DB::table('news')->sortBy ->simplePaginate(4);
        return view('berita', [
            'news' => $news,
        ]);
    }
}
