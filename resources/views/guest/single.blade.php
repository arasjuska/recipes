<x-guest-layout>

    <div class="mb-4 pb-1 uppercase border-b-2 border-dotted tracking-wide">
        <h1>{{ $recipe->title }}</h1>
    </div>

    <div class="grid grid-cols-3 md:gap-4 mb-4 md:mb-8">
        <div class="col-span-3 md:col-span-2 mb-4 md:mb-0">
            <div class="rounded-md overflow-hidden">
                <img src="{{ $recipe->cover }}" alt="{{ $recipe->title }}" class="w-full h-40 md:h-72 object-cover">
            </div>
        </div>
        <div class="col-span-6 md:col-span-1 p-5 rounded-md bg-sky-50 text-sm">
            <div class="mb-2 flex justify-between">
                <div class="space-x-1 text-gray-500">
                    <i class="fa-solid fa-bell"></i>
                    <span>{{ __('Prep time') }}</span>
                </div>
                <div>
                    <span>10 min</span>
                </div>
            </div>
            <div class="mb-2 flex justify-between">
                <div class="space-x-1 text-gray-500">
                    <i class="fa-solid fa-utensils"></i>
                    <span>{{ __('Cook time') }}</span>
                </div>
                <div>
                    <span>25 min</span>
                </div>
            </div>
            <div class="mb-3 flex justify-between">
                <div class="space-x-1 text-gray-500">
                    <i class="fa-solid fa-people-group"></i>
                    <span>{{ __('Serving') }}</span>
                </div>
                <div>
                    <span>4</span>
                </div>
            </div>

            <div class="mb-4 p-4 space-y-1 bg-sky-100 rounded-md">
                <div class="flex justify-between">
                    <div class="space-x-1 text-gray-500">
                        <i class="fa-solid fa-heart"></i>
                        <span>{{ __('Like') }}</span>
                    </div>
                    <div>
                        <span>254</span>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="space-x-1 text-gray-500">
                        <i class="fa-solid fa-message"></i>
                        <span>{{ __('Comments') }}</span>
                    </div>
                    <div>
                        <span>16</span>
                    </div>
                </div>
            </div>
            <div class="mb-3 px-4 flex justify-between">
                <div class="space-x-1 text-gray-500">
                    <i class="fa-solid fa-share-nodes"></i>
                    <span>{{ __('Share') }}</span>
                </div>
                <div class="space-x-1 text-gray-500">
                    <i class="fa-solid fa-bookmark"></i>
                    <span>{{ __('Bookmark') }}</span>
                </div>
            </div>
            <div class="py-2 bg-rose-100 rounded-md space-x-2 flex justify-center items-center text-gray-500">
                <i class="fa-solid fa-heart"></i>
                <input type="submit" value="Like">
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3 md:gap-4">
        <div class="col-span-6 md:col-span-1 p-5 rounded-md bg-green-50 text-gray-500 text-sm mb-4 md:mb-0">
            <div class="mb-2 flex justify-between">
                <div class="space-x-1">
                    <span>{{ __('Prep time') }}</span>
                </div>
                <div>
                    <span>10 min</span>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="space-x-1">
                    <span>{{ __('Prep time') }}</span>
                </div>
                <div>
                    <span>10 min</span>
                </div>
            </div>
        </div>

        <div class="col-span-3 md:col-span-2">
            <p>{{ $recipe->description }}</p>
        </div>
    </div>

</x-guest-layout>
