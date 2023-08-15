<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold  text-xl">Log In!</h1>

            <form action="/login" method="POST" class="mt-10">

                @csrf

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
                        Log In
                    </button>
                </div>

            </form>

        </main>
    </section>
</x-layout>
