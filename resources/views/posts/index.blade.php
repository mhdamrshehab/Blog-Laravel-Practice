<x-layout>
@include('posts.__header')



    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts"/>

            {{$posts->links()}}
        @else
            <p>No posts yet, Please check it later</p>
        @endif

{{--
        <div class="lg:grid lg:grid-cols-3">
            <x-post-card/>
            <x-post-card/>
            <x-post-card/> --}}

        </div>
    </main>

</x-layout>
