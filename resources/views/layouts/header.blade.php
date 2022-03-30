<div class="flex justify-between items-center text-white uppercase text-sm tracking-wide">
    <a href="/">
        <p>Receptai.eu</p>
    </a>

    <nav x-data="{open: false}">
        <button class="md:hidden" @click="open = !open">
            <i class="fa-solid fa-align-justify"></i>
        </button>
        <ul :class="{'translate-x-full': !open, 'translate-x-0': open}"
            class="fixed left-0 right-0 min-h-screen bg-amber-500 space-y-4 p-4 transform transition duration-300 translate-x-full md:relative md:flex md:space-x-8 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0">
            <li>
                <a href="/">{{ __('Home') }}</a>
            </li>
            <li>
                <a href="#">{{ __('Recipes') }}</a>
            </li>
            <li>
                <a href="#">{{ __('Contacts') }}</a>
            </li>
        </ul>
    </nav>
</div>
