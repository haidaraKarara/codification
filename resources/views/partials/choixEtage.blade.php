@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        
        <section class="content-header">
          <h1>
            Créer un nouveau couloir
          </h1>
          <p style="margin-top:5px; margin-left:25px;"><i class="fas fa-bars fa-7x"></i>
            <small>Etage Concerné ?</small>
          </p>
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Gestion Couloir</a></li>
            <li class="active">Ajouter</li>
            <li class="active">Choisir batiment</li>
            <li class="active">Choisir etage</li>

          </ol>
        </section>
        <p class="box"></p>
    <div class="row" style="margin-top:40px;">
        <div class="col-sm-6 col-sm-offset-2">
          <form method="POST" action="{{ route('createCouloir') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="etage">Choisir l'étage concerné</label>
                <select class="form-control" id="etage" required name="etage">
                    @foreach($etages as $etage)
                    <option value="{{$etage->id}}">{{$etage->numetage}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="couloir">Nom du Couloir:</label>
              <input type="text" class="form-control" id="couloir" name="couloir" minlength="4" placeholder="Couloir" required>
            </div>
                <button type="submit" class="btn btn-default">Valider</button>
          </form>
        </div>
    </div>
      
    </section>
@endsection