<form action="{{route('register')}}" method="POST">
    @csrf
    <div class="mb-5">
        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>

        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                <i class="fa-solid fa-user"></i>
            </div>
           <input
                id="name"
                type="text"
                name="name"
                placeholder="Tu nombre"
                class="border  w-full rounded-lg block pl-10 p-2.5 @error('name') border-red-500 @enderror"
                value="{{old('name')}}"
            >
        </div>

        @error('name')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
        @enderror
    </div>
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
                value="{{old('username')}}"
            >
        </div>
        @error('username')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
        @enderror
    </div>
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
        <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-600">
                <i class="fa-solid fa-lock"></i>
            </div>
           <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                placeholder="Confirmar contraseña"
                class="border  w-full rounded-lg block pl-10 p-2.5"
            >
        </div>
    </div>
    <button type="submit" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">Crear cuenta</button>
</form>