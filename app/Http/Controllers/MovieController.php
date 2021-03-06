<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::all();
        return view('movies.index',['movies'=>$movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #Validate
        $this->validate($request,[
            'title'=>'required',
            'genre'=>'required',
            'actor'=>'required'
        ]);

        $movie = Movie::create($request->except('_token'));

        if($movie):
            return redirect()->back()->with('status','Movie added succesfully!');
        else:
            return redirect()->back()->with('error','We could not process your request');
        endif;



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m = Movie::find($id);
        return view('movies.edit',['movie'=>$m]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        #Validate
        $this->validate($request,[
            'title'=>'required',
            'genre'=>'required',
            'actor'=>'required'
        ]);

        $movie = Movie::find($id)->update($request->except('_token','_method'));
         if($movie):
            return redirect()->back()->with('status','Movie updated succesfully!');
        else:
            return redirect()->back()->with('error','We could not process your request');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
