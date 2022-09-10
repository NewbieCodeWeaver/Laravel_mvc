@extends('layouts.plantilla')

@section('title','Editar club')

@section('content')

@include('layouts.includes.header')

<div class="pl-80 pr-80 pt-10 pb-12">

<!-- Display edit club form -->

@include('forms.editclubForm')

</div>

@include('layouts.includes.footer') 

@endsection