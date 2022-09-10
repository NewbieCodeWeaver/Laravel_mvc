@extends('layouts.plantilla')

@section('title','Nuevo equipo')

@section('content')

@include('layouts.includes.header')

<div class="pl-80 pr-80 pt-10 pb-12">

<!-- Display add team form -->

@include('forms.addteamForm')

</div>

@include('layouts.includes.footer') 

@endsection