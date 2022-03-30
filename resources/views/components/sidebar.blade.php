<div class="md:px-4 pb-4">
    <div class="mb-8">
        <div class="mb-4 pb-1 uppercase border-b-2 border-dotted tracking-wide">
            <h4>{{ __('Categories') }}</h4>
        </div>
        <ul>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('category', $category->slug) }}">
                            <h1 class="hover:text-amber-500">{{ $category->title }}</h1>
                        </a>
                    </li>
                @endforeach
            </div>
        </ul>
    </div>

    <div class="mb-8">
        <div class="my-4 pb-1 uppercase border-b-2 border-dotted tracking-wide">
            <h4>{{ __('Popular Recipes') }}</h4>
        </div>
        <ul>
            @foreach($popular_recipes as $recipe)
                <li class="my-4">
                    <div class="grid grid-cols-1 grid-cols-3 md:gap-4">
                        <div class="col-span-3 md:col-span-1">
                            <div class="rounded-md overflow-hidden">
                                <img src="{{ $recipe->cover }}" alt="{{ $recipe->title }}" class="w-full h-40 md:h-20 object-cover">
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-2 py-2">
                            <div>
                                {{ $recipe->title }}
                            </div>
                            <div class="text-xs">
                                {{ $recipe->category->title }}
                            </div>
                            <div class="flex space-x-3 text-amber-500 text-xs">
                                <div class="flex space-x-1">
                                    <span><i class="fa-solid fa-heart"></i></span>
                                    <span>10</span>
                                </div>
                                <div class="flex space-x-1">
                                    <span><i class="fa-solid fa-message"></i></span>
                                    <span>12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
