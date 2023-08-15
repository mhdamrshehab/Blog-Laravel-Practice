<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="dropdown-arrow" class="absolute pointer-events-none" />

        </button>
    </x-slot>

    <a href="/?" :active="request() - > routeIs(`home`)"
        class="block text-left px-3 text-sm leadig-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white foucs:text-white">All
    </a>
    @foreach ($categories as $category)
        <a href="/?category={{ $category->slug }}&{{http_build_query( request()->except('category','page'))}}"
            class="block text-left px-3 text-sm leadig-6 hover:bg-blue-500
             focus:bg-blue-500 hover:text-white foucs:text-white {{ isset($currentCategory) && $currentCategory->id === $category->id ? 'bg-blue-500 text-white' : '' }}">{{ ucwords($category->name) }}
        </a>
    @endforeach

</x-dropdown>
