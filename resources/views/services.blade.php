<x-app-layout>
    
    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">                    
                    <h2 class="mb-4 text-4xl font-bold text-center lg:text-left text-[#10346e]">{{ __('messages.Nuestros Servicios') }}</h2>
                    @isset($info_company)
                        @foreach ($info_company as $row)
                            <p class="mb-4 font-normal text-gray-500 dark:text-gray-400">{{ __('messages.En') }} {{$row->name_company}},  {{ __('messages.nos preocupamos en ofrecer servicio de transporte turístico, poniendo  especial atención en la seguridad, puntualidad,  y atención a sus requerimientos. Desde traslados aeropuerto - hotel - aeropuerto, hasta transporte a cualquier lugar de la Riviera Maya.') }}<br>
                            {{ __('messages.Para más información') }} <button type="button" data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" class="font-medium text-blue-800 hover:underline"> {{ __('messages.Contáctanos') }}.</button> 
                            </p>
                        @endforeach
                    @endisset
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">                        
                        @isset($all_services)
                            @foreach ($all_services as $row)
                                <div class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow md:max-w-sm grow min-h-sm">
                                    <img src="img/icons/{{ $row->icon }}" alt="icon" class="mb-3 size-12">                                
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-[#10346e] dark:text-white">{{ __("messages.$row->tittle") }}</h5>
                                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{  __("messages.$row->description") }}</p>                                    
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout> 