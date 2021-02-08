<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Models\Film;
use Illuminate\Http\Request;
use Plank\Mediable\Facades\MediaUploader;
use Ramsey\Uuid\Type\Integer;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('films.index', [
            'films' => Film::paginate(6),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmRequest $request)
    {


        $film = Film::create([
           'user_id' => auth()->user()->id,
           'title' => $request->post('title'),
           'category' => $request->post('category'),
           'body' => $request->post('body'),
        ]);



        if($request->file('image')){
            $media = MediaUploader::fromSource($request->file('image'))
                ->toDirectory('img/'.auth()->user()->id.'/film/'.$film->id)
                ->upload();
            $film->attachMedia($media, 'film_'.$film->id);
        }




        return redirect()->route('films.index')
            ->with('status', 'Film has been added')
            ->with('color', 'alert-info');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $film = Film::findOrFail($id);

        if ($film->user_id !== auth()->user()->id){
            return redirect()->route('films.index')->with([
               'status' => "You have not permission to edit",
                'color' => "alert-danger"
            ]);
        }

        return view('films.edit', [
            'film' => $film
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FilmRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FilmRequest $request, int $id)
    {
        $film = Film::findOrFail($id);
        if ($film->user_id !== auth()->user()->id){
            return redirect()->route('films.index')->with([
                'status' => "You have not permission to edit",
                'color' => "alert-danger"
            ]);
        }

        if ($request->del_img) {
            $media = $film->firstMedia('film_'.$film->id);
            $film->detachMedia($media);
            $media->delete();
        }

        if ($request->file('image')) {
            $media = MediaUploader::fromSource($request->file('image'))
                ->toDirectory('img/'.auth()->user()->id.'/film/'.$film->id)
                ->upload();
            if ($film->hasMedia('film_'.$film->id)){
                $film->syncMedia($media, 'film_'.$film->id);
            }
            else {
                $film->attachMedia($media, 'film_'.$film->id);
            }
        }

        $film->fill($request->all())->update();

        return redirect()->route('films.index')->with([
            'status' => "Film has been edited",
            'color' => "alert-info"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $film = Film::findOrFail($id);

        if ($film->user_id !== auth()->user()->id){
            return redirect()->route('films.index')->with([
                'status' => "You have not permission to edit",
                'color' => "alert-danger"
            ]);
        }

        $film->delete();

        return redirect()->route('films.index')->with([
            'status' => "Film has been deleted",
            'color' => "alert-info"
        ]);
    }
}
