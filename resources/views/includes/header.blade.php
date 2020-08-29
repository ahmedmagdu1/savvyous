<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="canonical" href="https://savvyous.com">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	   <!-- Font Awesome 4.7.0 -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  </head>
  <body>

    <header>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg">
  <a class="navbar-brand" href="#"><img src="{{ asset('images/logo/white-logo.png') }}"/></a>
    <form class="form-inline">
  <div class="form-group col-auto has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="text" class="form-control" placeholder="Search for Projects, teams, Companies etc.">
  </div>
    </form>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-suitcase">
            <span class="badge badge-danger">11</span>
          </i>
          Post Project
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-envelope">
            <span class="badge badge-warning">11</span>
          </i>
          Mesages
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" >
          <i class="fa fa-bell">
            <span class="badge badge-primary">11</span>
          </i>
          Notifications
        </a>

      </li>
    </ul>


    <ul class="navbar-nav  ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-user">
            <span class="badge badge-info">11</span>
          </i>
          Profile
        </a>
      </li>
    </ul>

  </div>
</nav>
<main class="py-4">
    @yield('content')
</main>
    </header>
