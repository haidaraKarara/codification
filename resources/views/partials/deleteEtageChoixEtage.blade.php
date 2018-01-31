@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        
      <section class="content-header">
      <h1>
        Supprimer une étage
      </h1>
      <p style="margin-top:5px; margin-left:25px;"><i class="fa fa-th fa-7x"></i>
      <small>Etage concerné ?</small>
      </p>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Gestion Etage</a></li>
        <li class="active">Suppression</li>
        <li>Choix de l'étage</li>
      </ol>
    </section>
<p class="box"></p>
    <div class="row" style="margin-top:40px;">
        <div class="col-sm-6 col-sm-offset-2">
          <form method="POST" action="{{ route('deleteEtage') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="etage">Choisir l'étage concerné</label>
                <select class="form-control" id="etage" required name="etage">
                    @foreach($etages as $etage)
                    <option value="{{$etage->id}}">{{$etage->numetage}}</option>
                    @endforeach
                </select>
            </div>
                <button type="submit" class="btn btn-default">Valider</button>
          </form>
        </div>
    </div>
      
    </section>
@endsection