<div class="inline-flex rounded-md shadow-sm mr-6">
    <button {{ $attributes->except('class') }} class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white focus:outline-none {{ $attributes->get('class') }} transition ease-in-out duration-150">
        {{ $slot }}
    </button>
</div>
