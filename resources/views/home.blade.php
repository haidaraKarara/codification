@extends('layouts.master')

@section('content')
    <section class="content">
    <div id="img" class="row">
        <div class="col-sm-4 col-sm-offset-2">
            
        </div>
        <img src="{{asset('images/logo_coud.png')}}" alt="logo_coud" id="myimg">
    </div>
    </section>
    <style>
        #myimg
        {
            width:600px;
            margin-top: 100px;
            margin-left:170px;
                /* background-color: #fff;
                background-image: url("{{asset('images/logo_coud.png')}}");
                background-repeat:no-repeat;
                background-attachment: fixed;
                background-position: right;
                background-size: 10px 50px;
                background-color: #F4F9FA; */
        }
    </style>
@endsection