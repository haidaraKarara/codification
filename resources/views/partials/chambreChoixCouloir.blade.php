@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        
      <section class="content-header">
      <h1>
        Créer une nouvelle chambre
      </h1>
      <p style="margin-top:5px; margin-left:25px;"><i class="fas fa-bars fa-7x"></i>
      <small>Couloir Concerné ?</small>
      </p>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Gestion Chambre</a></li>
        <li class="active">Ajouter</li>
        <li class="active">Choisir batiment</li>
        <li class="active">Choisir etage</li>
        <li class="active">Choisir couloir</li>


      </ol>
    </section>
    <p class="box"></p>
    <div class="row" style="margin-top:40px;">
        <div class="col-sm-6 col-sm-offset-2">
          <form method="POST" action="{{ route('createChambre') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="couloir">Choisir le couloir concerné</label>
                <select class="form-control" id="couloir" required name="couloir">
                    @foreach($couloirs as $couloir)
                    <option value="{{$couloir->id}}">{{$couloir->nomcouloir}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="numChambre">Numéro chambre:</label>
              <input type="number" class="form-control" id="numChambre" name="chambre" minlength="1" placeholder="Chambre" required>
            </div>
            <div class="form-group">
              <label for="maxOcc">Max Occupant:</label>
              <input type="number" class="form-control" id="maxOcc" name="maxOccupant" minlength="1" placeholder="Max Occupant" required>
            </div>
                <button type="submit" class="btn btn-default">Valider</button>
          </form>
        </div>
    </div>
      
    </section>
@endsection