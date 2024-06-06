<x-app-layout>
    
    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @foreach ($info_company as $row)
                        <div class="flex flex-col justify-center">
                            <div class="flex flex-col items-center p-4 mb-5 bg-white rounded shadow lg:flex-row">
                                <img src="img/logo_head.png" alt="icon" class="w-full mr-4 max-w-80 max-h-80">
                                <div class="text-center">
                                    <h2 class="mb-4 text-2xl font-semibold tracking-tight text-[#10346e]">{{ $row->name_company }}</h2>
                                    <p class="mb-3 font-normal text-gray-500">{{ $row->DESCRIPTION }}</p>
                                </div>
                            </div>                            
                        </div> 
                        
                        <div class="flex flex-col justify-center">
                            <div class="flex flex-col items-center p-4 mb-5 bg-white rounded shadow lg:flex-row-reverse">
                                <img src="img/mision.jpg" alt="icon" class="w-full mr-4 max-w-80 max-h-80">
                                <div class="text-center">
                                    <h2 class="mb-4 text-2xl font-semibold tracking-tight text-[#10346e]">Misión</h2>
                                    <p class="mb-3 font-normal text-gray-500">{{ $row->mision }}</p>
                                </div>
                            </div>                            
                        </div>

                        <div class="flex flex-col justify-center">
                            <div class="flex flex-col items-center p-4 mb-5 bg-white rounded shadow lg:flex-row">                                
                                <img src="img/vision.jpg" alt="icon" class="w-full mr-4 max-w-80 max-h-80">                                
                                <div class="text-center">
                                    <h2 class="mb-4 text-2xl font-semibold tracking-tight text-[#10346e]">Visión</h2>
                                    <p class="mb-3 font-normal text-gray-500">{{ $row->vision }}</p>
                                </div>
                            </div>                            
                        </div> 
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>