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

    public function destination(Request $request)
    {
        $destinations = Destination::simplePaginate(4)->sortByDesc('created_at');
        // $news = DB::table('news')->sortBy ->simplePaginate(4);
        // $destinations = Destination::where('title', 'LIKE', '%' . 'voluptas' . '%');

        if ($request->has('search')) {
            $destinations = Destination::where('title', 'ILIKE', '%' . request('search') . '%')
                ->where('province', 'ILIKE', '%' . request('province') . '%')
                ->orWhere('city', 'ILIKE', '%' . request('search') . '%')
                ->get();
        }
        if ($request->has('coordinates')) {
            $coordinates = $request->coordinates;
            
            return view('destinasi', [
                'destinations' => $destinations,
                'coordinates' => $coordinates,
                'zoom' => 50,

            ]);
        } else {
            return view('destinasi', [
                'destinations' => $destinations,
                'coordinates' => '-7.4852045,109.2617381,7',
                'zoom' => 10, 
            ]);
        }

        
    }
}
