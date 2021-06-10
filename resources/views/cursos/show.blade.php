<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Educa - Centro de Formación Continua</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="/img/navbar-logo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="/nosotros">NOSOTROS</a></li>
                        <li class="nav-item"><a class="nav-link" href="/cursos/show">CURSOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="/cursos">INTRANET</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contactenos">CONTACTENOS</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">CURSOS</div>

            </div>
        </header>

@extends('base')
@section('main')
<div class="col-sm-12">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
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
            <td>{{$curso->CategoriaCurso}} </td>
            <td>{{$curso->InicioCurso}}</td>
            <td>{{$curso->FinCurso}}</td>
            <td>S/. {{$curso->CostoCurso}}</td>
            <td><a href="/afiches/{{$curso->id}}.jpg" download>Descargar afiche</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>

@endsection