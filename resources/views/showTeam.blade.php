@extends('layouts.plantilla')

@section('title','Mostrar equipo')

@section('content')

@include('layouts.includes.header')

<div class="pl-80 pr-80 pt-10 pb-12">

<!-- Display show team form -->

@include('forms.showteamForm')

</div>

@include('layouts.includes.footer') 

@endsection