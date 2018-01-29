@extends('layouts.master')
@section('content')
<section class="content">
    <section class="content-header">
        <h1>
            Planifier une nouvelle codification
        </h1>
        <p style="margin-top:5px; margin-left:25px;"><i class="far fa-calendar-alt fa-7x"></i></p>
        <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendrier</li>
        <li>Nouveau évenement</li>
        </ol>
    </section>
    <div class="row" style="margin-top:40px;">
      <div class="col-sm-6 col-sm-offset-2">
        <form method="POST" action="{{ route('ajoutEvenement') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="bat">Date d'ouverture:</label>
            <input type="date" name="ouverture" class="form-control" id="bat" minlength="4" placeholder="Pavillon" required>
          </div>
          <div class="form-group">
            <label for="pwd">Date de fermeture:</label>
            <input type="date"  name="fermeture" class="form-control" id="pwd" required placeholder="Nombre d'étage">
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