<?php

namespace alquilemos\Http\Controllers;

use Illuminate\Http\Request;
use alquilemos\curso; //este es el modelo
use alquilemos\Http\Requests\StoreCursoRequest;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles(['admin']);
        $curso= curso::all();
        return view('curso.index',compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCursoRequest $request)
    {
        if ($request->hasfile('logo')){
            $file=$request->file('logo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
        $curso = new curso;

        $curso->nombre=$request->input('nombre');
        $curso->duracion=$request->input('duracion');
        $curso->descripcion=$request->input('descripcion');
        $curso->temas=$request->input('temas');
        $curso->logo=$name;

        $curso->save();
        //return $request->input('documento');

        //return 'Saved';
        return redirect()->route('curso.index')->with('status','Curso agregado correctamente');;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $curso= curso::find($id);
        return view('curso.show',compact('curso'));
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
        $curso= curso::find($id);
        return view('curso.edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCursoRequest $request, curso $curso)
    {
        //

        $curso->fill($request->all());
        if ($request->hasfile('logo')){
            $file=$request->file('logo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $curso->logo=$name;
        }
        $curso->save();
        return redirect()->route('curso.show',[$curso])->with('status','Curso actualizado correctamente');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(curso $curso)
    {
        //
        $curso->delete();
        $file_path=public_path().'/images/'.$curso->logo;
        \File::delete($file_path);
        //return 'Deleted';
        return redirect()->route('curso.index')->with('status','Curso eliminado correctamente');
    }
}
