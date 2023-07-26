@extends('layouts.layout')

@section('title',"Editar perfil: ".auth()->user()->username)

@section('content')
<div class="md:flex md:justify-center">
    <div class="md:w-1/2 bg-white shadow p-6">
        <form action="{{route('profile.update')}}" enctype="multipart/form-data" method="POST" class="mt-10 md:mt-0">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Usuario</label>
        
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                        <i class="fa-solid fa-user"></i>
                    </div>
                   <input
                        id="username"
                        type="text"
                        name="username"
                        placeholder="Tu nombre de usuario"
                        class="border  w-full rounded-lg block pl-10 p-2.5  @error('username') border-red-500 @enderror"
                        value="{{auth()->user()->username}}"
                    >
                </div>
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="image" class="mb-2 block uppercase text-gray-500 font-bold">Usuario</label>
        
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                        <i class="fa-solid fa-user"></i>
                    </div>
                   <input
                        id="image"
                        type="file"
                        name="image"
                        class="border w-full rounded-lg block pl-10 p-2.5  "
                        accept=".jpg, .jpge, .png"
                    >
                </div>
            </div>
            <button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">Guardar cambios</button>
        </form>
    </div>
</div>

@endsection