@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        
        <section class="content-header">
          <h1>
            Ajouter une nouvelle étage
          </h1>
          <p style="margin-top:5px; margin-left:25px;"><i class="fa fa-th fa-7x"></i></p>
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Gestion Etage</a></li>
            <li class="active">Ajouter</li>
          </ol>
        </section>
        <div class="row" style="margin-top:40px;">
        <div class="col-sm-6 col-sm-offset-2">
          <form method="POST" action="{{ route('createEtage') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="etage">Ajout d'une nouvelle étage</label>
              <select class="form-control" id="etage" required name="etage">
                @foreach($batiments as $batiment)
                  <option value="{{$batiment->id}}">{{$batiment->nombatiment}}</option>
                @endforeach
              </select>
              <div class="form-group">
                <label for="eta">Numéro étage:</label>
                <input type="number" class="form-control" id="eta" name="numEtage"  placeholder="Pavillon" required>
              </div>
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