@props(['trigger'])
    <div x-data=`{ show: false }` @click.away=`show = false`>
            <div @click=`show = ! show`>
                {{$trigger}}
            </div>

            <div x-show=" show " class="overflow-auto max-h-32 py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50">
                {{ $slot }}
            </div>
    </div>
