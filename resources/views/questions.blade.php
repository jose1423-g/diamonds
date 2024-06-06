<x-app-layout>
    <div class="py-8">        
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">                    
                    <h2 class="mb-4 text-[#10346e] text-2xl tracking-tight font-semibold text-center">Preguntas Frecuentes</h2>                    
                        <div id="accordion-collapse" data-accordion="collapse">
                            @foreach ($all_questions as $row)
                                @if ($row->id_qandans == 1)
                                    <h2 id="accordion-collapse-heading-{{$row->id_qandans}}">
                                        <button type="button" class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-{{$row->id_qandans}}" aria-expanded="true" aria-controls="accordion-collapse-body-{{$row->id_qandans}}">
                                            <span>{{ $row->question }}</span>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                            </svg>
                                        </button>
                                    </h2>    
                                @else
                                    <h2 id="accordion-collapse-heading-{{$row->id_qandans}}">
                                        <button type="button" class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-{{$row->id_qandans}}" aria-expanded="false" aria-controls="accordion-collapse-body-{{$row->id_qandans}}">
                                            <span>{{ $row->question }}</span>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                            </svg>
                                        </button>
                                    </h2>                                    
                                @endif
                                
                                <div id="accordion-collapse-body-{{$row->id_qandans}}" class="hidden" aria-labelledby="accordion-collapse-heading-{{$row->id_qandans}}">
                                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                        {{$row->answer}}
                                    </div>
                                </div>                                                    
                            @endforeach                                         
                        </div>               
                </div>
            </div>
        </div>
    </div>
</x-app-layout>