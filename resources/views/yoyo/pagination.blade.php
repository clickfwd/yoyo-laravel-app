@php 
$results = $this->results;
@endphp
<div>
    @empty($results)
        No results
    @else
        <ul class="space-y-3">
        @foreach ($results as $entry)
            <li class="py-2 px-4 border border-gray-300 bg-gray-50 sm:rounded-md">
                <p>{{ $entry['title'] }}</p>
            </li>
        @endforeach
        </ul>

        <div class="bg-white py-4 flex items-center justify-between">
            <div class="space-y-3 sm:space-y-0 flex-col flex-1 flex items-center justify-between sm:flex-row">
                <div>
                <p class="text-sm leading-5 text-gray-700">
                    Showing
                    <span class="font-medium">{{ $this->start }}</span>
                    to
                    <span class="font-medium">{{ $this->end }}</span>
                    of
                    <span class="font-medium">{{ $this->total }}</span>
                    results
                </p>
                </div>
                <div>
                <nav class="relative z-0 inline-flex shadow-sm">
                    @if ($this->previous)
                    <a href="?page={{ $this->previous }}" 
                        yoyo:get="goToPage({{ $this->previous }})"
                        class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Previous">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    @endif

                    @for ($i = 1; $i <= $pages; $i++)
                    <a href="?page={{ $i }}" 
                        yoyo:get="goToPage({{ $i }})"
                        yoyo:push-url="?page={{ $i }}" 
                        class="
                            {{ $page == $i ? 'text-pink-600 hover:text-pink-600' : '' }}
                            {{ $i == 1 && !$this->previous ? 'rounded-l-md' : '' }}
                            {{ $i == $this->pages && !$this->next ? 'rounded-r-md' : '' }}
                            -ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                        >
                        {{ $i }}
                    </a>
                    @endfor
                    
                    @if ($this->next)
                    <a href="?page={{ $this->next }}" 
                        yoyo:get="goToPage({{ $this->next }})"
                        class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next"
                    >
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    @endif
                </nav>
                </div>
            </div>
        </div>   
    @endempty 
</div>
