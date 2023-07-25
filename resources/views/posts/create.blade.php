@extends('layouts.layout')

@section('title', 'Crear post')

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{route('image.store')}}" id="dropzone" 
            class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">@csrf</form>
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{route('post.store')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="title" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                       <input
                            id="title"
                            type="text"
                            name="title"
                            placeholder="Titulo de la publicación"
                            class="border  w-full rounded-lg block pl-10 p-2.5 @error('title') border-red-500 @enderror"
                            value="{{old('title')}}"
                        >
                    </div>
                    @error('title')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">Descripción</label>
                    <textarea
                        id="description"
                        name="description"
                        placeholder="Descripción"
                        class="border  w-full rounded-lg block pl-10 p-2.5 @error('title') border-red-500 @enderror"
                    >{{old('description')}}</textarea>

                    @error('description')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="hidden" name="image" value="{{old('image')}}">
                    @error('image')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
             
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">Publicar</button>
            </form>
        </div>
    </div>
@endsection