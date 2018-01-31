@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        
        <section class="content-header">
          <h1>
            Ajouter une nouvelle étage
          </h1>
          <p style="margin-top:5px; margin-left:25px;"><i class="fas fa-bars fa-7x"></i></p>
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Gestion Etage</a></li>
            <li class="active">Ajouter</li>
          </ol>
        </section>
        <p class="box"></p>
                <!-- Tableau -->
    <section class="box" style="padding-top:1px;">
        <div class="box-header">
            <h6 class="box-title">Détails Batiments</h6>
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
        </div>
                    <table class="table table-responsive table-bordered table-hover box-tools">
                        <thead> 
                            <tr>
                                <th><b>PAVILLONS</b></th>
                                <th><b>Num ETAGE</b></th>
                                <th><b>Nbr CHAMBRES</b></th>
                            </tr>
                        </thead>
                        <tbody class="box-body no-padding">
                            @foreach ($batiments as $batiment)
                                
                                @foreach ($etages as $etage)
                                    @if ($batiment->id != $etage->batiment_fk)
                                        @continue
                                    @else
                                    <tr>
                                        <td>{{$batiment->nombatiment}}</td>
                                        <td>{{$etage->numetage}}</td>
                                        <br>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
    </section>
        <!-- Fin tableau -->
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
                    <i class="far fa-thumbs-up fa-4x"></i>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fa fa-window-close"></i></a>
                    {{$message}}
                </div>    
            </div>
        </div>
      @endif
    </section>
@endsection