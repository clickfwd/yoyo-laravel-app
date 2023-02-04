<div class="space-y-3" yoyo:swap="innerHTML">

    @csrf
    
    @foreach($this->results as $row)
        <div class="my-3 flex flex-row items-center space-x-3 py-2 px-4 border border-gray-300 bg-gray-50 sm:rounded-md">
            {{ $row['title'] }}
        </div>
    @endforeach
        
    @if ($this->results)
        <div class="inline-flex rounded-md shadow-sm">
            <button
                type="button"
                id="load-more"
                yoyo:post="refresh"
                yoyo:val.offset="{{ $offset + $limit }}" 
                yoyo:target="closest div"
                yoyo:swap="outerHTML"
                class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
            >
                Load more
            </button>
    </div>    
    @endif

</div>
