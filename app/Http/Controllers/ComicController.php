<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {

        $form_data = $this->validation($request->all());

        $comic = new Comic();
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];

        $comic->save();

        return redirect()->route('comic.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'title' => 'required|max:50',
        //     'description' => 'required',
        //     'thumb' => 'max:255',
        //     'price' => 'required|max:10',
        //     'serires' => 'required|max:50',
        //     'sala_date' => 'required',
        //     'type' => 'required|max:50'
        // ]);


        $form_data = $this->validation($request->all());

        $comic = Comic::find($id);
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];

        $comic->update();

        return redirect()->route('comic.show', ['comic' => $comic]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comic.index');
    }



    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|max:50',
                'description' => 'required',
                'thumb' => 'max:255',
                'price' => 'required|max:10',
                'serires' => 'required|max:50',
                'sale_date' => 'required',
                'type' => 'required|max:50',
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.max'     => 'Il titolo può contenere al massimo 50 caratteri',
                'description.required' => 'La descrizione è obbligatoria',
                'thumb.max'     => 'Il link dell\'immagine può contenere al massimo 255 caratteri',
                'price.required' => 'Il prezzo è obbligatorio',
                'price.max'     => 'Il prezzo può contenere al massimo 10 caratteri',
                'series.required' => 'Il nome della serie è obbligatorio',
                'series.max'     => 'Il nome della serie può contenere al massimo 50 caratteri',
                'sale_date.required' => 'La dat di uscita è obbligatoria',
                'type.required' => 'La tipologgia è obbligatoria',
                'type.max'     => 'La tipologgia può contenere al massimo 50 caratteri',
            ]
        )->validate();

        return $validator;
    }
}
