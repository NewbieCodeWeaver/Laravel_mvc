@extends('layouts.plantilla')

@section('title','Mostrar club')

@section('content')

@include('layouts.includes.header')

<div class="pl-80 pr-80 pt-10 pb-12">

<!-- Display show club form -->

@include('forms.showclubForm')

</div>

@include('layouts.includes.footer') 

@endsection