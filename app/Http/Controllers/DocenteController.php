<?php

namespace alquilemos\Http\Controllers;

use alquilemos\Docente;
use Illuminate\Http\Request;
use alquilemos\Http\Requests\StoreDocenteRequest;




class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes= Docente::all();
        return view('docentes.index',compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store(StoreDocenteRequest $request)
    {

        
        // para enviar o mostrar todo lo que recibe pos rescu
        // return $request->all();

        //con este solo muestra uno de los valores

        // se declara una nueva instancia 

        // para el tratado de archivo subir archivo al servidor
        if ($request->hasfile('avatar')){
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
        $docente = new Docente;

        $docente->nombres=$request->input('nombres');
        $docente->documento=$request->input('documento');
        $docente->apellidos=$request->input('apellidos');
        $docente->slug=$request->input('slug');
        $docente->avatar=$name;

        $docente->save();
        //return $request->input('documento');

        //return 'Saved';
       return redirect()->route('docente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {

        // para buscar por slug o me imagino cualquier tipo de campo
        //$docente=Docente::where('slug','=',$slug)->firstOrFail();
        //
        //para buscar por id
        //$docente= Docente::find($id);

        return view('docentes.show',compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        //
        return view('docentes.edit',compact('docente'));

        //return $docente;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
        //
        $docente->fill($request->except('avatar'));
        //$docente->fill($request->all());
        if ($request->hasfile('avatar')){
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $docente->avatar=$name;
        }
        $docente->save();
        return redirect()->route('docente.show',[$docente])->with('status','Docente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        //
        $docente->delete();
        $file_path=public_path().'/images/'.$docente->avatar;
        \File::delete($file_path);
        //return 'Deleted';
        return redirect()->route('docente.index');
    }
}
