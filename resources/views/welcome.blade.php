<x-app-layout>
    
    <x-slot name="header">             
        @isset($info_company)
            @foreach ($info_company as $row)
                <div class="bg-center bg-no-repeat bg-cover rounded-md h-80" style="background-image: url(img/{{ $row->img_head }})">
                    <div class="flex items-center justify-center h-full">                                    
                        <h1 class="text-6xl font-bold text-white" style="text-shadow: 1px 1px 2px black">{{  __("$row->name_company") }}</h1>                           
                    </div>
                </div>  
            @endforeach
        @endisset      
    </x-slot>
    
    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="mb-4 text-4xl font-bold text-center lg:text-left text-[#10346e]">{{ __('messages.Servicios') }}</h2>                    
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                        
                        @isset($services)
                            @foreach ($services as $row)
                                <div class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow md:max-w-sm grow min-h-sm">
                                    <img src="img/icons/{{ $row->icon }}" alt="icon" class="mb-3 size-12">                                
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-[#10346e] dark:text-white">{{ __("messages.$row->tittle") }}</h5>
                                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ __("messages.$row->description") }}</p>
                                    <a href="{{ route('services') }}" class="inline-flex items-center font-medium text-blue-800 hover:underline">
                                        {{ __('messages.Ver todos los servicios') }}
                                        <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                                        </svg>
                                    </a>                            
                                </div>
                            @endforeach
                        @endisset
                    </div>{{-- flex content --}}
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">                    
                    <h2 class="mb-4 text-4xl font-bold text-center lg:text-left text-[#10346e]">{{ __('messages.Preguntas Frecuentes') }}</h2>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">                        
                        
                        @isset($questions)
                            @foreach ($questions as $row)
                                <div class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow md:max-w-sm grow min-h-xs">
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-[#10346e]">{{ __("messages.$row->question") }}</h5>
                                    <p class="mb-3 overflow-y-auto font-normal text-gray-500 dark:text-gray-400 max-h-24">
                                        {{ __("messages.$row->answer") }}
                                    </p>                            
                                    <a href="{{ route('questions') }}" class="inline-flex items-center font-medium text-blue-800 hover:underline">
                                        {{ __('messages.Ver todas las preguntas') }}
                                        <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                                        </svg>
                                    </a>
                                </div>
                            @endforeach
                        @endisset                                             
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">                                        
                     
                    <div id="gallery" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            @isset($gallery)
                                @foreach ($gallery as $row)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="img/gallery/{{ $row->img_gallery }}" class="absolute block h-auto max-w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                                    </div>    
                                @endforeach
                            @endisset
                                                                                        
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>    

</x-app-layout>