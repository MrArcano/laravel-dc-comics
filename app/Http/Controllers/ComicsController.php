<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comic = $request->all();

        $new_comic = new Comic();
        $new_comic->title = $comic['title'];
        $new_comic->description = $comic['description'];
        $new_comic->thumb = $comic['thumb'];
        $new_comic->price = $comic['price'];
        $new_comic->series = $comic['series'];
        $new_comic->sale_date = $comic['sale_date'];
        $new_comic->type = $comic['type'];
        $new_comic->artists = $comic['artists'];
        $new_comic->writers = $comic['writers'];

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comic = Comic::where('slug', $slug)->first();
        $id = $comic->id;

        $id_next = $id + 1;
        if($id_next > Comic::count()) $id_next = 1;
        $next = Comic::where('id', $id_next)->first();
        $next_slug = $next->slug;

        $id_prev = $id - 1;
        if($id_prev < 1) $id_prev = Comic::count();
        $prev = Comic::where('id', $id_prev)->first();
        $prev_slug = $prev->slug;

        return view('comics.show', compact('comic','next_slug','prev_slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
