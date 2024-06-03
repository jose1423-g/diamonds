<footer class="bg-white rounded-lg shadow dark:bg-gray-900">
    <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
        @isset($info_company)
            @foreach ($info_company as $row)
                <div class="sm:flex sm:items-center sm:justify-between">        
                    <a href="{{ route('welcome') }}" class="flex items-center mb-4 space-x-3 sm:mb-0 rtl:space-x-reverse">                
                        <img src="img/{{ $row->img_company }}" class="h-8" alt="logo">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ $row->name_company }}</span>                                    
                    </a>
                    <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="{{ route('about') }}" class="font-medium text-blue-800 hover:underline me-4 md:me-6">About</a>
                        </li>                
                        <li>
                            <a href="{{ $row->facebook }}" target="_blank" class="font-medium text-blue-800 hover:underline me-4 md:me-6">Facebook</a>
                        </li>
                        <li>
                            <a href="{{ $row->instagram }}" target="_blank" class="font-medium text-blue-800 hover:underline me-4 md:me-6">Instagram</a>
                        </li>                
                        <li>
                            <button type="button" data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" class="font-medium text-blue-800 hover:underline">Contact</button>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />        
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 {{ $row->name_company }}. All Rights Reserved.</span>
            @endforeach                
        @endisset
    </div>
</footer>

