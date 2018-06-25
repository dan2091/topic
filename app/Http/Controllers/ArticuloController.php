<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Articulo;
use App\Http\Resources\Articulo as ArticuloResource;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::paginate(15);
        return ArticuloResource::collection($articulos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulo = $request->isMethod('put') ? Articulo::findOrFail($request->id) : new Articulo;

        $articulo->id = $request->input('id');
        $articulo->titulo = $request->input('titulo');
        $articulo->cuerpo = $request->input('cuerpo');

        if($articulo->save()){
            return new ArticuloResource($articulo);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);
        //if()
        return new ArticuloResource($articulo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        if($articulo->delete()){
            return new ArticuloResource($articulo);
        }
    }
}
