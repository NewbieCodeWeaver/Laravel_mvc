@extends('layouts.plantilla')

@section('title','Homepage')

@section('content')

@include('layouts.includes.header')

<div class="pl-80 pr-80 pt-10 pb-12">

<!-- Display add match form -->

@include('forms.addmatchForm')

</div>

@include('layouts.includes.footer') 

@endsection
