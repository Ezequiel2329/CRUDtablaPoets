<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poet = DB::table('poets')
            ->orderBy('poet_code')
            ->get();
        return view('crud.showpoets',[
            'poets' => $poet
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.registersPoet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poet=DB::table('poets')
            ->insert([
                'first_name'=>$request->input('nombre'),
                'surname'=>$request->input('apellido'),
                'address'=>$request->input('direccion'),
                'postcode'=>$request->input('codigopostal'),
                'telephone_number'=>$request->input('telefono')
            ]);
        return redirect()->action('crud@index')
        ->with('status', '¡Agregacion exitosa!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poet=DB::table('poets')
        ->where('poet_code','=',$id)
        ->first();
        return view('crud.registersPoet', ['poets'=>$poet]);
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
    public function update(Request $request)
    {
        $poet=DB::table('poets')
            ->where('poet_code','=', $request->input('id'))
            ->update([
                'first_name'=>$request->input('nombre'),
                'surname'=>$request->input('apellido'),
                'address'=>$request->input('direccion'),
                'postcode'=>$request->input('codigopostal'),
                'telephone_number'=>$request->input('telefono')
            ]);
        return redirect()->action('crud@index')
            ->with('status', '¡Modificacion exitosa!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poet=DB::table('poets')
            ->where('poet_code','=',$id)
            ->delete();

        return redirect()->action('crud@index')
            ->with('status', '¡Eliminacion exitosa!');
    }
}
