<?php

namespace App\Http\Controllers;

use App\Models\ShowingTimes;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Cinema;

class ShowingTimesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Movie::with('cinemas')->get();
        return view('showing-times.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movie::all();
        $cinemas = Cinema::all();
        return view('showing-times.create',compact('movies','cinemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'movie' => 'required', 
            'cinema' => 'required',
            'showing_time' => 'required', 
          ]);
          $movie = Movie::find($request->movie);
          $movie->cinemas()->attach($request->cinema,["showing_time" =>$request->showing_time]);
          return  redirect()->route('showing-times.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShowingTimes  $showingTimes
     * @return \Illuminate\Http\Response
     */
    public function show(ShowingTimes $showingTimes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShowingTimes  $showingTimes
     * @return \Illuminate\Http\Response
     */
    public function edit(ShowingTimes $showingTimes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShowingTimes  $showingTimes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShowingTimes $showingTimes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShowingTimes  $showingTimes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShowingTimes $showingTimes)
    {
        //
    }
}
