<div class="border border-gray-100 p-4" yoyo:on="load" yoyo:include="*">

    @spinning
        @php
        $entries = config('test-data');
        shuffle($entries);
        $entries = array_splice($entries,0,3);
        @endphp

        <ul class="divide-y divide-gray-200">
        @foreach ($entries as $entry)
            <li class="text-lg py-3">{{ $entry['title'] }}</li>
        @endforeach
        </ul>
    @endspinning

</div>
