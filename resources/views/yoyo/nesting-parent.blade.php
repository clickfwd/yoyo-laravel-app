@php
$entries = config('test-data');
$keys = array_rand($entries, 3);
$entries = array_intersect_key($entries, array_flip($keys));
@endphp

@emitToWithSelector('#wishlist-counter','reset-likes')

<div>

    @foreach($entries as $id => $entry)
        @yoyo('wishlist',['id' => $id])
    @endforeach

    <div class="inline-flex rounded-md shadow-sm">
        <button 
            yoyo
            class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
            >
            Refresh
        </button>
    </div>    
    
</div>