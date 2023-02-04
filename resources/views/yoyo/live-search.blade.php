<div>
    <form class="flex flex-col space-y-4 w-72">  
        
        @csrf

        <div class="mt-1 relative rounded-md shadow-sm">
            <input id="q" 
                type="search"
                name="q"
                yoyo:on="keyup delay:300ms changed, input delay:300ms changed"
                yoyo:post="refresh"
                value="{{ $q ?? '' }}"
                class="form-input block w-full sm:text-sm sm:leading-5" placeholder="Search"
            >
        </div>

    </form>

    @if ($this->results)
        <div class="mt-6">
            <ul class="space-y-3">
            @foreach($this->results as $row)
                <li class="py-2 px-4 border border-gray-300 bg-gray-50 sm:rounded-md">
                    {{ $row['title'] }}
                </li>
            @endforeach
            </ul>
        </div>
    @elseif ($spinning && $q)
        <p>No results found</p>
    @endif
</div>