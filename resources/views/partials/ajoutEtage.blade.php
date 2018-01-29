@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        
        <section class="content-header">
          <h1>
            Créer un nouveau batiment
            <small>Pavillon</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Gestion Batiment</a></li>
            <li class="active">Ajouter</li>
          </ol>
        </section>
    <div class="row" style="margin-top:40px;">
      <div class="col-sm-6 col-sm-offset-2">
        <form method="POST" action="{{ route('createBatiment') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="bat">Nom du Batiment:</label>
            <input type="text" class="form-control" id="bat" minlength="4" placeholder="Pavillon" required>
          </div>
          <div class="form-group">
            <label for="pwd">Nombre d'étages:</label>
            <input type="number" class="form-control" id="pwd" required placeholder="Nombre d'étage">
          </div>
          <div class="form-group">
            <label for="sexe">Contrainte sexe</label>
            <select class="form-control" id="sexe" required>
                <option value="MF" checked>unisexe</option>
                <option value="M">M</option>
                <option value="F">F</option>
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