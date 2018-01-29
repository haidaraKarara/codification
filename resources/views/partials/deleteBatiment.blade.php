@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        
        <section class="content-header">
          <h1>
            Supprimer un batiment
            <small>Pavillon</small>
          </h1>
          <p style="margin-top:5px; margin-left:25px;"><i class="fas fa-home fa-7x"></i></p>
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Gestion Batiment</a></li>
            <li class="active">Supprimer</li>
          </ol>
        </section>
    <div class="row" style="margin-top:40px;">
      <div class="col-sm-6 col-sm-offset-2">
        <form method="POST" action="{{ route('deleteBatiment') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="sexe">Suppression d'un batiment</label>
            <select class="form-control" id="sexe" required name="batiment">
              @foreach($batiments as $batiment)
                <option value="{{$batiment->id}}">{{$batiment->nombatiment}}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-default">Valider</button>
        </form>
      </div>
    </div>
    @if($message != "")
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-6 col-sm-offset-2">
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fa fa-window-close"></i></a>
                    {{$message}}
                </div>    
            </div>
        </div>
      @endif
    </section>
@endsection