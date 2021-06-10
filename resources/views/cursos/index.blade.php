@extends('base')

@section('main')
@extends('layouts.app')
<div class="col-sm-12">
<div class="col-sm-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
    </div>
    <h1 class="display-3">Listado de Cursos</h1>
    <div>
        <a style="margin: 19px;" href="{{ route('cursos.create')}}" class="btn btn-primary">Nuevo curso</a>
    </div> 
        <table class="table table-striped">
            <thead>
                <tr>
                <td>CODIGO</td>
                <td>CURSO</td>
                <td>CATEGORIA</td>
                <td>INICIO</td>
                <td>FIN</td>
                <td>COSTO</td>
                <td>AFICHE</td>
                </tr>
            </thead>
            <tbody>
                @foreach($cursos as $curso)
                <tr>
                    <td>{{$curso->id}}</td>
                    <td>{{$curso->NombreCurso}}</td>
                    <td>{{$curso->CategoriaCurso}}</td>
                    <td>{{$curso->InicioCurso}}</td>
                    <td>{{$curso->FinCurso}}</td>
                    <td>S/. {{$curso->CostoCurso}}</td>
                    <td><a href="afiches/{{$curso->id}}.jpg" download>Descargar afiche</a></td>
                    <td>
                        <a href="{{ route('cursos.edit',$curso->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <form action="{{ route('cursos.destroy', $curso->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
