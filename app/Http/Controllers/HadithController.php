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
      $paginate =  $search->paginateRaw();
      $pagesArray = $paginate->toArray();
      $aggregations = &$pagesArray['data']['aggregations'];
      $chapters = &$aggregations['chapter']['buckets'];
      $books = &$aggregations['book']['buckets'];
      $sources = &$aggregations['source']['buckets'];

      for ($i = 0 ; $i < sizeof($chapters) ; $i++){
        $chapter = \App\Chapter::find($chapters[$i]['key']);
        $chapters[$i]['title'] = $chapter->title;
      }

      for ($i = 0 ; $i < sizeof($books) ; $i++){
        $book = \App\Book::find($books[$i]['key']);
        $books[$i]['title'] = $book->title;
      }

      for ($i = 0 ; $i < sizeof($sources) ; $i++){
        $source = \App\source::find($sources[$i]['key']);
        $sources[$i]['title'] = $source->title;
      }
      unset($pagesArray['data']['_shards']);
      return $pagesArray ;
    }
}
