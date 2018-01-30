@extends('layouts.master')

@section('content')
<section class="content">
      <!-- Formulaire de création de batiment -->
        
        <section class="content-header">
          <h1>
            Supprimer une étage
          </h1>
          <p style="margin-top:5px; margin-left:25px;"><i class="fa fa-th fa-2x"></i></p>
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Gestion Etage</a></li>
            <li class="active">Suppression</li>
          </ol>
        </section>
        <!-- Tableau -->
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><b>Détails batiments</b></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th><b>PAVILLONS</b></th>
                                <th><b>ETAGES</b></th>
                                <th><b>CHAMBRES</b></th>
                            </tr>
                            @foreach ($batiments as $batiment)
                                <tr>
                                @foreach ($etages as $etage)
                                    @if ($batiment->id != $etage->batiment_fk)
                                        @continue
                                    @else
                                        <td>{{$batiment->nombatiment}}</td>
                                        <td>{{$etage->numetage}}</td>
                                    @endif
                                @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
                <!-- /.box -->
        </div>
        <!-- Fin tableau -->
        <div class="row" style="margin-top:40px;">
        <div class="col-sm-6 col-sm-offset-2">
          <form method="POST" action="{{ route('createEtage') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="etage">Suppression d'une étage</label>
              <select class="form-control" id="etage" required name="etage">
                @foreach($batiments as $batiment)
                  <option value="{{$batiment->id}}">{{$batiment->nombatiment}}</option>
                @endforeach
              </select>
              <div class="form-group">
                <label for="eta">Numéro étage:</label>
                <input type="number" min="1" max="5" class="form-control" id="eta" name="numEtage"  placeholder="Pavillon" required>
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
