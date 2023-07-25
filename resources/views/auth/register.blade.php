@extends('layouts.layout')
@section('title', 'Regístrate en DevStagram') 

@section('content')
    <div class="md:flex justify-center md:gap-4 md:items-center">
        <div class="md:w-6/12 p-5">
           <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro">
        </div>
        <div class="md:w-5/12 bg-white p-6 rounded-lg shadow-xl">
           @include('components.register-form')
        </div>
    </div>
@endsection