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

</x-guest-layout>


