@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        <section class="content-header">
          <h1>
            Supprimer une étage
          </h1>
          <p style="margin-top:5px; margin-left:25px;"><i class="fa fa-th fa-7x"></i>
          <small>Batiment concerné ?</small>
          </p>
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Gestion Etage</a></li>
            <li class="active">Suppression</li>
            <li>Choix du batiment</li>
          </ol>
        </section>
    <section class="box"></section>
        <div class="row" style="margin-top:10px;">
            <div class="col-sm-6 col-sm-offset-2">
                <form method="POST" action="{{ route('deleteChoixEtage') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="batiment">Choisir le Batiment concerné</label>
                        <select class="form-control" id="batiment" required name="batiment">
                            @foreach($batiments as $batiment)
                            <option value="{{$batiment->id}}">{{$batiment->nombatiment}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Valider</button>
                </form>
            </div>
        </div>
    </section>
@endsection
