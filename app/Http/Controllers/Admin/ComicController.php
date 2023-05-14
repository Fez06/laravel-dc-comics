<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comic);

        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        

        // $request->validate([
        //     'title' => 'required|max:100',
        //     'description' => 'nullable|max:255',
        //     'thumb' => 'nullable|max:255',
        //     'price' => 'required|numeric|decimal:2',
        //     'series' => 'nullable|max:50',
        //     'sale_date' => 'nullable|max:10',
        //     'type' => 'nullable|max:50',
        //     'artists' => 'nullable|max:255',
        //     'writers' => 'nullable|max:255'
        // ]);

        $validated = $request->validated();

        $data = $request->all();

        $newComic = new Comic();

        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];

        $newComic->artists = $data['artists'];
        $newComic->writers = $data['writers'];

        $newComic->save();
        

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //$comic = Comic::find($id);
        $comic->artists = explode(',', $comic->artists);
        //dd($comic);
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {

        // $request->validate([
        //     'title' => 'required|max:100',
        //     'description' => 'nullable|max:255',
        //     'thumb' => 'nullable|max:255',
        //     'price' => 'required|numeric|decimal:2',
        //     'series' => 'nullable|max:50',
        //     'sale_date' => 'nullable|max:10',
        //     'type' => 'nullable|max:50',
        //     'artists' => 'nullable|max:255',
        //     'writers' => 'nullable|max:255'
        // ]);

        $request->validated();
        
        $data = $request->all();

        $comic->update($data);

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}
