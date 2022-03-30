<div {{ $attributes->merge(['class' => 'flex items-center justify-between mt-auto text-sm']) }}>
    <h5 {{ $attributes->merge(['class' => 'text-gray-500 hover:text-amber-500 uppercase tracking-wider']) }}>
        {{ $slot }}
    </h5>

    <div class="flex space-x-3 text-amber-500">
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
