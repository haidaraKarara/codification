@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
      <section class="content-header">
      <h1>
        Créer une nouvelle chambre
      </h1>
      <p style="margin-top:5px; margin-left:25px;"><i class="fas fa-bars fa-7x"></i>
      </p>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Gestion Chambre</a></li>
        <li class="active">Ajout</li>
      </ol>
    </section>
    <p class="box"></p>
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
      <div class="col-sm-4 col-sm-offset-4">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">{{$fin}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
      </div>
    </section>
@endsection