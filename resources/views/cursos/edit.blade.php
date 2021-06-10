@extends('base') 
@section('main')
@extends('layouts.app')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar curso</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('cursos.update', $curso->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="NombreCurso">CURSO:</label>
                <input type="text" class="form-control" name="NombreCurso" value={{ $curso->NombreCurso }} />
            </div>

            <div class="form-group"> 
                <label for="CategoriaCurso">CATEGORIA</label><br>
                <select type="text" name="CategoriaCurso" class="form-select"  value={{ $curso->CategoriaCurso}} />
                        <option value="{{ $curso->CategoriaCurso}}">{{ $curso->CategoriaCurso}}</option>
						<option value="Sistemas Integrados de Gestión" id="SIG">Sistemas Integrados de Gestión</option>
						<option value="Gestión de Calidad e Inocuidad Alimentaria" id="SGCIA">Gestión de Calidad e Inocuidad Alimentaria</option>
                        <option value="Gestión de la Calidad en Laboratorios ISO/IEC 17025" id="17025">Gestión de la Calidad en Laboratorios ISO/IEC 17025</option>
                        <option value="Ingenieria de la Calidad y Procesos" id="ICAL">Ingenieria de la Calidad y Procesos</option>
                        <option value="Seguridad y Salud en el Trabajo" id="SST">Seguridad y Salud en el Trabajo</option>
                        <option value="Gestión Estrategica Ambiental" id="GEA">Gestión Estrategica Ambiental</option>
		        </select>
            </div>

            <div class="form-group">
                <label for="InicioCurso">INICIO:</label>
                <input type="date" class="form-control" name="InicioCurso" value={{ $curso->InicioCurso }} />
            </div>

            <div>
                <label for="FinCurso">FIN</label>
                <input type="date" class="form-control" name="FinCurso" value={{ $curso->FinCurso }} /> 
            </div>

            <div class="form-group"> 
                <label for="CostoCurso">COSTO</label>
                <input type="number" class="form-control" name="CostoCurso" value={{ $curso->CostoCurso }} /> 
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection