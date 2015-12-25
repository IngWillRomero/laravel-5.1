<!DOCTYPE html>
<html lang="en">
<head>
  <title> @yield('title') | user </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" media="screen" title="no title" charset="utf-8">
  <script href="{{asset('plugins/bootstrap/js/bootstrap.js')}}"> </script>
  <script href="{{asset('plugins/jquery/jquery-2.1.4.js')}}"></script>

</head>

<body>
<div class="container">
  <div class="jumbotron"> <!-- con well se hace mas pequeño con jumbotron-->
    <h1>Admin</h1>
    <p>usuario admistrador</p>
  </div>



@yield('content')

@include('admin.footer')
