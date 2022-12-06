@extends('layouts.plantilla')

@section('title','Nuevo club')

@section('content')

<div id="body" class="grid place-items-center pt-20 pb-20 pl-14 pr-14">
    <div class="w-4/5">
        @include('forms.addclubForm')
    </div>
</div>

@endsection