<div class="flex justify-between items-center text-white text-sm tracking-wide">
    <a href="/" class="uppercase">
        <p>Receptai.eu</p>
    </a>

    <nav x-data="{open: false}">
        <button class="md:hidden" @click="open = !open">
            <i class="fa-solid fa-align-justify"></i>
        </button>
        <ul :class="{'translate-x-full': !open, 'translate-x-0': open}"
            class="fixed left-0 right-0 min-h-screen bg-amber-500 space-y-4 p-4 transform transition duration-300 translate-x-full md:relative md:flex md:space-x-8 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0">
            <li class="uppercase">
                <a href="/">{{ __('Home') }}</a>
            </li>
            <li class="uppercase">
                <a href="#">{{ __('Recipes') }}</a>
            </li>
            <li class="uppercase">
                <a href="#">{{ __('Contacts') }}</a>
            </li>

            @if (Route::has('login'))
                @auth
                    <li>
                        <div x-data="{dropdownMenu: false}">
                            <button @click="dropdownMenu = ! dropdownMenu" class="flex items-center">
                                <span>{{ auth()->user()->name }}</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                            <div x-show="dropdownMenu"
                                 class="md:absolute right-0 p-3 mt-2 bg-white text-gray-500 rounded-md shadow w-44">
                                <ul class="space-y-2">
                                    <li class="hover:text-amber-500">
                                        <a href="{{ route('dashboard') }}">
                                            {{ __('Dashboard') }}
                                        </a>
                                    </li>
                                    <li class="hover:text-amber-500">
                                        <form method="post" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit">{{ __('Logout') }}</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}">Log in</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
</div>
