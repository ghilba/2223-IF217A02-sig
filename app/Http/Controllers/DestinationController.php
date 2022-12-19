<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        return("View Destination");
        return view('destination.index', [
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
        return view('destination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'coordinates' => 'required',
            'file_path' => '',
        ]);
        Destination::create($validatedData);
        return redirect('/dashboard/destination')->with('success', 'New transaction has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        return view('destination.show',[
            'destination' => $destination
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        return view('destination.edit', [
            'destination' => $destination
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'coordinates' => 'required',
            'file_path' => '',
        ]);
        Destination::where('id', $destination->id)
            ->update($validatedData);

        return redirect('/destination')->with('success', 'Data sudah terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        Destination::destroy($destination->id);
        return redirect('/destination')->with('deleted', 'Data berhasil dihapus!');

    }
}
