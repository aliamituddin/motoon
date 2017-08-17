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
      $search = \App\hadith::search($search);
      $paginate =  $search->paginate();
      $aggregations['aggregations'] =$search->raw()['aggregations'];
      $chapters = &$aggregations['aggregations']['chapter']['buckets'];
      for ($i = 0 ; $i < sizeof($chapters) ; $i++){
        $chapter = \App\chapter::find($chapters[$i]['key']);
      $chapters[$i]['title'] = $chapter->title;
      }
      return array_merge($paginate->toArray(),$aggregations);
    }
}
