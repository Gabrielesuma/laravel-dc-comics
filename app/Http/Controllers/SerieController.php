<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $series = Serie::all();
        return view('series.index', compact('series'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        //$new_serie = new Serie();
        //$new_serie->fill($form_data);
        /*$new_serie->title = $form_data['title'];
        $new_serie->description = $form_data['description'];
        $new_serie->image = $form_data['image'];
        $new_serie->price = $form_data['price'];
        $new_serie->serie = $form_data['serie'];
        $new_serie->sale_date = $form_data['sale_date'];
        $new_serie->type = $form_data['type'];*/
        //$new_serie->save();
        $new_serie = Serie::create($form_data);
        return redirect()->route('series.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  object Serie  $id
     *
     */
    public function show(Serie $series)
    {
        //dd($series->id);
        return view('series.show', compact('series'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function edit(Serie $series)
    {
        return view('series.edit', compact('series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $series)
    {
        //$serie = Serie::find($id);
        $form_data = $request->all();
        /*$serie->title = $form_data['title'];
        $serie->description = $form_data['description'];
        $serie->image = $form_data['image'];
        $serie->price = $form_data['price'];
        $serie->serie = $form_data['serie'];
        $serie->sale_date = $form_data['sale_date'];
        $serie->type = $form_data['type'];*/
        //$serie->update();
        $series->update($form_data);
        return redirect()->route('series.show', $series->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $series)
    {
        $series->delete();
        return redirect()->route('series.index');
    }
}
