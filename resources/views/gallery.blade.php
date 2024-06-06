<x-app-layout>

<div class="py-8">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6">                               
                <div class="grid grid-cols-2 gap-4 md:grid-cols-2">
                    
                    @foreach ($gallery as $row)
                        <div class="grid gap-4">                            
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="img/gallery/{{ $row->img_gallery }}" alt="">
                            </div>                            
                        </div>
                    @endforeach                        
                </div>                
            </div>
        </div>
    </div>
</div>
</x-app-layout>