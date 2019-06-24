<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use Illuminate\support\Facades\Storage;
use DB;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $stocks = Stock::orderBy('created_at','desc')->get();
        return view('stocks.index')->with('stocks',$stocks);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'article_no' => 'required',
            'colour' => 'required',
            'quantity' => 'required',
            'location' => 'required',
            'collection' => 'required',

        ]);

        //handle file upload
        if($request->hasFile('cover_image')){
            //get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName() ;
            //get just filename
            $filename= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

        }

        //add an item
        $stock = new Stock;
        $stock->article_no = $request->input('article_no');
        $stock->colour = $request->input('colour');
        $stock->quantity = $request->input('quantity');
        $stock->location = $request->input('location');
        $stock->collection = $request->input('collection');

        $stock->save();

        return redirect('/stocks')->with('success','Item Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($article_no)
    {
        $stock = Stock::find($article_no);
        return view('stocks.show')->with('stock',$stock);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($article_no)
    {
        $stock = Stock::find($article_no);
        return view('stocks.edit')->with('stock',$stock);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $article_no)
    {
        $this->validate($request,[
            'article_no' => 'required',
            'colour' => 'required',
            'quantity' => 'required',
            'location' => 'required',
            'collection' => 'required',

        ]);

        //handle file upload
        if($request->hasFile('cover_image')){
            //get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName() ;
            //get just filename
            $filename= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

        }



        $stock = Stock::find($article_no);
        $stock->article_no = $request->input('article_no');
        $stock->colour = $request->input('colour');
        $stock->quantity = $request->input('quantity');
        $stock->location = $request->input('location');
        $stock->collection = $request->input('collection');

        $stock->save();

        return redirect('/stocks')->with('success','Item Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($article_no)
    {



        $stock = Stock::find($article_no);




        $stock->delete();
        return redirect('/stocks')->with('success','Stock Deleted');
    }
}
