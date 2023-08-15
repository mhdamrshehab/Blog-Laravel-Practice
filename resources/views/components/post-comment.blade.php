@props(['comment'])

<x-panel class="bg-gray-50">
    <artical class="flex space-x-4">
        <div class="flex-shrink-0">
            <img class="rounded-xl" width="60" height="60" src="https://i.pravatar.cc/60?u={{$comment->user_id}}" alt="">
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{$comment->author->username}}</h3>
                <p class="text-xs">
                    Posted
                    <time>{{$comment->created_at->diffForHumans() }}</time>
                </p>
            </header>

            <p>
                {{$comment->body}}
            </p>
        </div>
    </artical>

</x-panel>
