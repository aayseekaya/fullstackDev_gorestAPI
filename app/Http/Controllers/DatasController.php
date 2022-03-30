<?php

namespace App\Http\Controllers;

use App\Models\Datas;
use Illuminate\Http\Request;

class DatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    $jsonData  = file_get_contents('https://gorest.co.in/public/v2/users');
    $response = json_decode($jsonData, true);
   // return view("welcome", compact($jsonData));
  //dd($response);
    return view('welcome', compact('response'));
      //  return response()->json($jsonData);
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
     * @param  \App\Models\Datas  $datas
     * @return \Illuminate\Http\Response
     */
    public function show(Datas $datas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datas  $datas
     * @return \Illuminate\Http\Response
     */
    public function edit(Datas $datas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datas  $datas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datas $datas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datas  $datas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datas $datas)
    {
        //
    }
}
