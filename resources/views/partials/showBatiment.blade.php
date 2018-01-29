@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        
        <section class="content-header">
          <h1>
            Liste des batiments existants
            <small>Pavillons</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Gestion Batiment</a></li>
            <li class="active">Afficher</li>
          </ol>
        </section>
        
        <div class="row" style="margin-top:70px;">
                @foreach($batiments as $batiment)
                <div class="info-box col-sm-4" style="margin-left:10px;">
                <p>{{$batiment->nom}}</p>
                    <span class="info-box-icon bg-aqua"><i class="fa fa-home"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-number">Nbr Etages: <b>{{$batiment->nombreEtage}}</b></span>
                        <span class="info-box-text">Contrainte Sexe: <b>{{$batiment->sexeFixer}}</b></span>
                    </div>
                </div>
                    <!-- /.info-box-content -->
                    <!-- <div class="col-lg-6 col-md-4">
                    <h4 class="text-center"><div class="bg-light-blue disabled color-palette"><span>{{$batiment->nom}}</span></div></h4>
                    <div class="color-palette-set">
                        
                        <div class="bg-light-blue color-palette"><span>Nbr Etages: {{$batiment->nombreEtage}}</span></div>
                        <div class="bg-light-blue-active color-palette"><span>Contrainte Sexe: {{$batiment->sexeFixer}}</span></div>
                    </div>
                    </div> -->
                @endforeach
            </div>
        </div>
</section>
@endsection