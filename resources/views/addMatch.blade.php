@extends('layouts.plantilla')

@section('title','Nuevo partido - Clubs Manager')

@section('content')
    <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
    <div id="body" class="grid place-items-center py-12 px-6 lg:py-20 lg:px-14">
        <div class="w-full lg:w-4/5">
            @include('forms.addmatchForm')
        </div>
    </div>
@endsection