@extends('layouts.layout')

@section('title',$user->username)

@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{$user->image ? asset('profiles').'/'.$user->image : asset('img/usuario.svg')}}" alt="imagen usuario">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10">
               <div class="flex items-center gap-2">
                    <p class="text-gray-700 text-3xl">{{$user->username}}</p>
                    @auth
                        @if ($user->id === auth()->user()->id)
                            <a href="{{route('profile.edit')}}" class="text-gray-500 hover:text-gray-600 cursor-pointer"><i class="fa-solid fa-pencil"></i></a>
                        @endif
                    @endauth
               </div>
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    {{$user->followers->count()}}
                    <span class="font-normal">
                        @choice('Seguidor|Seguidores',$user->followers->count())
                    </span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    {{$user->followings->count()}}
                    <span class="font-normal">
                        Siguiendo
                    </span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    {{$user->posts->count()}}
                    <span class="font-normal">
                        Posts
                    </span>
                </p>

                @auth
                    @if (!$user->checkFollow(auth()->user()))
                        @if ($user->id != auth()->user()->id)
                            <form action="{{route('user.follow',$user->username)}}" method="POST">
                                @csrf
                                <button
                                    type="submit"
                                    class="bg-blue-600 text-white uppercase rounded px-3 py-1 text-xs font-bold cursor-pointer "
                                >Seguir</button>
                            </form>
                        @endif
                    @else      
                        <form action="{{route('user.unfollow',$user->username)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="bg-red-600 text-white uppercase rounded px-3 py-1 text-xs font-bold cursor-pointer "
                            >Dejar de seguir</button>
                        </form>
                    @endif   
                    
                @endauth
               

            </div>
        </div>
    </div>
    <section class="container mx-auto mt-10">
        <h2 class="text-4xl text-center font-black my-10">Publicaciones</h2>
        
       @if ($posts->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
                @foreach ($posts as $post )
                    <div>
                        <a href="{{route('post.show',['user'=>$user,'post'=>$post])}}">
                            <img src="{{asset('uploads').'/'.$post->image}}" alt="{{$post->title}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="my-10">
                {{$posts->links('pagination::tailwind')}}
            </div>
       @else
            <p class="text-gray-600 uppercase text-sm text-center font-bold">No Hay posts</p>
       @endif
        
      
    </section>
@endsection