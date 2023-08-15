@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" class="rounded-full"
                    alt="">
                <h2 class="ml-4">Want to participate?</h2>
            </header>


            <div class="mt-6">
                <textarea required placeholder="Quick, thing of something to say!" name="body"
                    class="text-sm w-full focus:outline-none focus:ring" id="body"rows="5"></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
                <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 pt-6">
                  <x-submit-button>Post</x-submit-button>
                </div>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline text-blue-500">Register</a> or <a class="hover:underline text-blue-500"
            href="/login">Log in</a> to leave a comment
    </p>

@endauth
