<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso; //====================================================Llamado Modelo Curso

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //======================================================================INDEX
    
     public function index() 
   
    {   
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     //======================================================================CREATE
    public function create()
    {   
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //======================================================================STORE
    public function store(Request $request)
    {   
       $request->validate([
            'NombreCurso'=>'required',
            'CategoriaCurso'=>'required',
            'InicioCurso'=>'required',
            'FinCurso'=>'required',
            'CostoCurso'=>'required'
        ]);

        $curso = new Curso([
            'NombreCurso' => $request->get('NombreCurso'),
            'CategoriaCurso' => $request->get('CategoriaCurso'),
            'InicioCurso' => $request->get('InicioCurso'),
            'FinCurso' => $request->get('FinCurso'),
            'CostoCurso' => $request->get('CostoCurso')
        ]);
        $curso->save();
        return redirect('/cursos')->with('success', 'Se ha registrado el nuevo curso, no olvide guardar el afiche del curso en la carpeta /public/afiches!');  
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //======================================================================SHOW
    public function show($id)
    {   
        $cursos = Curso::all();
        return view('cursos.show', compact('cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //======================================================================EDIT
    public function edit($id)
    {   
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //======================================================================UPDATE
    public function update(Request $request, $id)
    {   
        $request->validate([
            'NombreCurso'=>'required',
            'CostoCurso'=>'required'
        ]);

        $contact = Curso::find($id);
        $contact->NombreCurso =  $request->get('NombreCurso');
        $contact->CategoriaCurso = $request->get('CategoriaCurso');
        $contact->InicioCurso = $request->get('InicioCurso');
        $contact->FinCurso = $request->get('FinCurso');
        $contact->CostoCurso = $request->get('CostoCurso');
        $contact->save();

        return redirect('/cursos')->with('success', 'Curso actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //======================================================================DESTROY
    public function destroy($id)
    {   
        $curso = Curso::find($id);
        $curso->delete();

        return redirect('/cursos')->with('success', 'Curso eliminado!');
    }
}
