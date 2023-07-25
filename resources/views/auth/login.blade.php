@extends('layouts.layout')

@section('title','Inicia sesion en DevStagram')

@section('content')
<div class="md:flex justify-center md:gap-4 md:items-center">
    <div class="md:w-6/12 p-5">
       <img src="{{asset('img/login.jpg')}}" alt="Imagen registro">
    </div>
    <div class="md:w-5/12 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{route('login')}}" method="POST">
            @csrf
            @if (session('message'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('message')}}</p>
            @endif
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                   <input
                        id="email"
                        type="email"
                        name="email"
                        placeholder="Tu correo"
                        class="border  w-full rounded-lg block pl-10 p-2.5  @error('email') border-red-500 @enderror"
                        value="{{old('email')}}"
                    >
                </div>
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-600">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                   <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Tu contraseña"
                        class="border  w-full rounded-lg block pl-10 p-2.5  @error('password') border-red-500 @enderror"
                        value="{{old('password')}}"
                    >
                </div>
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <input type="checkbox" name="remember" ><label class="text-gray-500 text-sm">Mantener mi sesión abierta</label>
            </div>
            <button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">Iniciar sesion</button>
        </form>
    </div>
</div>
@endsection