@props([
    'heading'
])

<div class="mb-20 relative">
            
    <div class="absolute inset-0 bg-gradient-to-r from-teal-400 to-blue-400 shadow-lg transform -skew-y-3 sm:skew-y-0 sm:-rotate-3 sm:rounded-lg"></div>

    <div class="relative bg-white p-6 sm:p-10 my-4 shadow-lg sm:rounded-lg">

        <h2 class="mb-8 text-2xl font-medium tracking-wide text-gray-900">{{ $heading }}</h2>

        {{ $slot }}

    </div> 
    
</div>
