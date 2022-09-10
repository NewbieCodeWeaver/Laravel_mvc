@extends('layouts.plantilla')

@section('title','Homepage')

@section('content')

@include('layouts.includes.header')

<div id="body" class="h-full pt-20 pb-20 pl-14 pr-14 bg-slate-200 bg-[url('../resources/imgs/img-home.png')] bg-no-repeat bg-cover	"><h1 class="text-6xl text-white pt-10 w-1/3">Toma el control <span class="text-gray-500">total</span> del partido</h1><div class="float-left mt-16 w-33 rounded-lg bg-red-600 mb-8 p-4 text-center text-base font-semibold text-red-50 hover:bg-red-800"><a href="{{route('partido.index')}}"><span class="pl-2 pr-2">VER PARTIDOS</span><i class="fa-solid fa-arrow-right"></i></a></div></div>

 @include('layouts.includes.footer') 