@extends('layouts.plantilla')

@section('title','Editar equipo - Clubs Manager')

@section('content')
    <div id="body" class="grid place-items-center py-12 px-6 lg:py-20 lg:px-14">
        <div class="w-full lg:w-4/5">
            @include('forms.editteamForm')
        </div>
    </div>
@endsection