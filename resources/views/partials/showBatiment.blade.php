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
                <p>{{$batiment->nombatiment}}</p>
                    <span class="info-box-icon bg-aqua"><i class="fa fa-home"></i></span>
                    <div class="info-box-content">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
@endsection
