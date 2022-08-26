@extends('layouts.plantilla')

@section('title','Editar partido')

@section('content')

@include('layouts.includes.header')

<div class="pl-80 pr-80 pt-10 pb-12">

<!-- Display edit match form -->

@include('forms.addmatchForm')

</div>

@include('layouts.includes.footer') 

@endsection