{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
     
        <title>{{ config('app.name') }}</title>
     
        {{-- <link href="vendor/mdb/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/mdb/css/mdb.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
        @laravelPWA
        <style text="text/css"> 
            html, body{
                display: flex;
                flex-direction: column;
                height:100vh;
                margin 0;
            }
            #fm{
                height:100%;
                width: 100%;
            }
        </style> 
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#"><stron> {{ Auth::user()->name }} </stron></a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Escribe" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
  
        <div id="fm"></div>   
        <script type="text/javascript" src="vendor/mdb/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="vendor/mdb/js/popper.min.js"></script>
        <script type="text/javascript" src="vendor/mdb/js/bootstrap.min.js"></script>
        {{-- <script type="text/javascript" src="vendor/mdb/js/mdb.min.js"></script> --}}
        <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    </body>
</html>



