@extends('layouts.plantilla')

@section('title','Homepage')

@section('content')

@include('layouts.includes.header')

<!-- Display add match form -->

@include('forms.addmatch')

@include('layouts.includes.footer') 

@endsection