<?php

namespace App\Http\Controllers;

use App\hadith;
use Illuminate\Http\Request;

class HadithController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return "sucess";
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
     * @param  \App\hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function show(hadith $hadith)
    {
        // $chapter = $hadith->chapter;
        // $book = $chapter->book;
        // $source = $book->source;
        return $hadith;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function edit(hadith $hadith)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hadith $hadith)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function destroy(hadith $hadith)
    {
        //
    }
    public function search ($search) {
      $result =  \App\hadith::search($search)->paginate();
        return $result;
        // $orders = App\Order::search('Star Trek')->raw();
    }
}
