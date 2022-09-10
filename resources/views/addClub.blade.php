@extends('layouts.plantilla')

@section('title','Nuevo club')

@section('content')

@include('layouts.includes.header')

<div class="pl-80 pr-80 pt-10 pb-12">

<!-- Display add club form -->

@include('forms.addclubForm')

</div>

@include('layouts.includes.footer') 

@endsection