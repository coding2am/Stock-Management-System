@extends('adminlte::page')

@section('title', 'Location')

@section('content_header')
     {{-- Breadcrum Start --}}
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Location</li>
      </ol>
    </nav>
    {{-- Breadcrum End --}}
@stop

@section('content')
    <div class="card p-2">
      <h1>Location Page</h1>
    </div>
@stop

@section('css')
    <style></style>
@stop

@section('js')
  <script>
    $(document).ready(function(){
    });
  </script>
@stop