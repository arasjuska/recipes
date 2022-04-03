<x-guest-layout>

    <div class="grid md:grid-cols-2 gap-5">
        @foreach($recipes as $recipe)
            <x-card>
                <x-card.cover>
                    <x-slot name="image">
                        {{ $recipe->cover }}
                    </x-slot>
                    <x-slot name="alt">
                        {{ $recipe->title }}
                    </x-slot>
                </x-card.cover>

                <x-card.body>
                    <a href="{{ route('single_recipe', $recipe->slug) }}">
                        {{ $recipe->title }}
                    </a>
                </x-card.body>

                <x-card.footer>
                    <a href="{{ route('category', $recipe->category->slug) }}">
                        {{ $recipe->category->title }}
                    </a>
                </x-card.footer>
            </x-card>
        @endforeach
    </div>

@if (Route::has('login'))
    <div class="hidden fixed top-30 right-50 px-6 py-4 sm:block bg-blue-500 p-12">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
</x-guest-layout>


