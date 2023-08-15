<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold  text-xl">Register!</h1>
            <form action="/register" method="POST" class="mt-10">

                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-x5 text-gray-00">Name</label>
                    <input value= "{{old('name')}}" type="text" class="border border-gray-400 p-2 w-full" name="name" id="name"
                        aria-describedby="helpId" placeholder="">
                        @error('name')
                             <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-x5 text-gray-00">Username</label>
                    <input value= "{{old('username')}}" type="text" class="border border-gray-400 p-2 w-full" name="username" id="username"
                        aria-describedby="helpId" placeholder="">
                        @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-x5 text-gray-00">Email</label>
                    <input value= "{{old('email')}}" type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"
                        aria-describedby="helpId" placeholder="">
                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-x5 text-gray-00">Password</label>
                    <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password"
                        aria-describedby="helpId" placeholder="">
                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded - py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
                    {{-- @if($errors->any())
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 text-xs mt-2">{{$error}}</li>

                    @endforeach
                    </ul>
                    @endif --}}
            </form>
        </main>
    </section>
</x-layout>
