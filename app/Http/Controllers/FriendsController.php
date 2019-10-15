<?php

namespace App\Http\Controllers;

use App\Friend;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Friend  $friends
     * @return \Illuminate\Http\Response
     */
    public function show(Friend $friends)
    {
        $friends = Friend::get()->sortBy('time_delta_from_today');
        $age_avg = Friend::get()->avg('age');
        return view('show', compact('friends', 'age_avg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Friend  $friends
     * @return \Illuminate\Http\Response
     */
    public function edit(Friend $friends)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Friend  $friends
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Friend $friends)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Friend  $friends
     * @return \Illuminate\Http\Response
     */
    public function destroy(Friend $friends)
    {
        //
    }
}
