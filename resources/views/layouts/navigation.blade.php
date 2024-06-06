<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">        
        <div class="flex justify-between h-16">            
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('welcome') }}">
                        <x-application-logo class="block w-auto h-12 text-gray-800 fill-current" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 lg:-my-px lg:ms-10 lg:flex">
                    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                        {{ __('Servicios') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('Acerca de') }}
                    </x-nav-link>
                    <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                        {{ __('Galería') }}
                    </x-nav-link>
                    <x-nav-link :href="route('questions')" :active="request()->routeIs('questions')">
                        {{ __('Preguntas Frecuentes') }}
                    </x-nav-link>
                    <x-nav-link  data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" class="cursor-pointer" id="contact">
                        {{ __('Contáctanos') }}
                    </x-nav-link>
                    
                    {{-- <x-nav-link :href="route('questions')" :active="request()->routeIs('questions')">
                        {{ __('Your experiences') }}
                    </x-nav-link> --}}
                </div>                
            </div>
                        
            @auth            
                <!-- Settings Dropdown -->
                <div class="hidden lg:flex lg:items-center lg:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                <div>
                                    @if (isset(Auth::user()->name))                                    
                                        {{ Auth::user()->name }}
                                    @endif
                                </div>

                                <div class="ms-1">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            @if (isset(Auth::user()->name))
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                            @endif

                            <!-- Authentication -->
                            @if (isset(Auth::user()->name))
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            @endif
                        </x-slot>
                    </x-dropdown>
                </div>  
                
            @else
            
                    {{-- @if (Route::has('login'))                    
                        <div class="hidden space-x-8 lg:-my-px lg:ms-10 lg:flex">
                            <x-nav-link :href="route('login')" class="mr-4">
                                {{ __('Log in') }}
                            </x-nav-link>
                        @endif
                        @if (Route::has('register'))
                            <x-nav-link :href="route('register')">
                                {{ __('Register') }}
                            </x-nav-link >
                        @endif                        
                        </div>--}}

            @endauth

            <!-- Hamburger -->
            <div class="flex items-center lg:-me-2 lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')">
                {{ __('Services') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                {{ __('Gallery') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('questions')" :active="request()->routeIs('questions')">
                {{ __('Frequently asked questions') }}
            </x-responsive-nav-link>
            {{-- <x-responsive-nav-link :href="route('questions')" :active="request()->routeIs('questions')">
                {{ __('Your experiences') }}
            </x-responsive-nav-link> --}}
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">            
            @auth
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800"> 
                        @if (isset(Auth::user()->name))
                            {{ Auth::user()->name }}
                        @endif
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        @if (isset(Auth::user()->name))
                            {{ Auth::user()->email }}
                        @endif
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    @if (isset(Auth::user()->name))
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>      
                    @endif
                    
                    <!-- Authentication -->
                    @if (isset(Auth::user()->name))
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @endif
                </div>
            @else
                {{-- <div class="px-4">
                    @if (Route::has('login'))
                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Log in') }}
                    </x-responsive-nav-link>
                    @endif
                    @if (Route::has('register'))
                        <x-responsive-nav-link :href="route('register')">
                            {{ __('Register') }}
                        </x-responsive-nav-link >
                    @endif
                </div> --}}
            @endauth            
        </div>        
    </div>
</nav>
