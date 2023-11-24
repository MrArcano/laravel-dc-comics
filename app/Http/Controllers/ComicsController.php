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
        $comics = Comic::orderBy("id","desc")->paginate(10);
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
        $form_comic = $request->all();

        $new_comic = new Comic();
        // $new_comic->title = $form_comic['title'];
        // $new_comic->slug = Comic::generateSlug($form_comic['title']);
        // $new_comic->description = $form_comic['description'];
        // $new_comic->thumb = $form_comic['thumb'];
        // $new_comic->price = $form_comic['price'];
        // $new_comic->series = $form_comic['series'];
        // $new_comic->sale_date = $form_comic['sale_date'];
        // $new_comic->type = $form_comic['type'];
        // $new_comic->artists = $form_comic['artists'];
        // $new_comic->writers = $form_comic['writers'];
        $form_comic['slug'] = Comic::generateSlug($form_comic['title']);
        $new_comic->fill($form_comic);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comics = Comic::all();
        foreach ($comics as $index => $comic) {
            if( $comic->slug == $slug ) {
                $id = $index;
            }
        }

        $num_comics = count($comics);
        // dump('num_comics: '.$num_comics);

        $id_next = $id + 1;
        if($id_next > $num_comics - 1) $id_next = 0;
        $next_slug = $comics[$id_next]->slug;

        $id_prev = $id - 1;
        if($id_prev < 0) $id_prev = $num_comics - 1;
        $prev_slug = $comics[$id_prev]->slug;

        // dump('id: ' .$id . ' - prev: ' . $id_prev . ' - next: ' .  $id_next);

        $comic = $comics[$id];

        return view('comics.show', compact('comic','next_slug','prev_slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $comic = Comic::where('slug', $slug)->first();
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comic $comic)
    {

        $edit_comic = $request->all();
        if($edit_comic['title'] !== $comic->title)
        {
            $edit_comic['slug'] = Comic::generateSlug($edit_comic['title']);
        }else{
            $edit_comic['slug'] = $comic->slug;
        }
        $comic->update($edit_comic);

        return redirect()->route('comics.show', $comic->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $comic = Comic::where('slug', $slug)->first();
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted',"Hai eliminato $comic->title !");
    }
}
