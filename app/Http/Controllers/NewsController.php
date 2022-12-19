<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        return("View News");
        return view('news.index', [
            'search' => $search,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // return $request->file('image')->store('news-images');
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|file|max:2048',
            'status' => 'required',
            'author_id' => 'required',
            'category_id' => 'required',
            'date_posted' => 'required',
            'date_updated' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('news-images');
        }

        News::create($validatedData);
        return redirect('/dashboard/news')->with('success', 'New transaction has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.edit', [
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
            'author_id' => 'required',
            'category_id' => 'required',
        ]);
        News::where('id', $news->id)
            ->update($validatedData);

        return redirect('/news')->with('success', 'Data sudah terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        News::destroy($news->id);
        return redirect('/news')->with('deleted', 'Data berhasil dihapus!');
    }
}
