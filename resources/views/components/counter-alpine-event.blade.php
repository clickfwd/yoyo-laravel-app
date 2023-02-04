@yoyo('counter')

<div class="bg-gray-50 mt-6 p-3 text-gray-700 font-medium py-3">
    Count : <span 
    x-data="{ count: 0 }" 
    @counter:updated.window="count = $event.detail" 
    x-text="count"
    ></span>
    <span class="ml-3 italic text-gray-600">updated with Alpine JS using server-emitted event</span>
</div>