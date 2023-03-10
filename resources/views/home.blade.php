<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Yoyo Demo for Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
        @yoyo_scripts
    </head>

    <body class="antialiased">
    
    <div class="relative overflow-hidden">

        <svg class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404" height="784" fill="none" viewBox="0 0 404 784">
            <defs>
                <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-blue-300" fill="currentColor"></rect>
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)"></rect>
        </svg>

        <div class="p-6 sm:p-12 max-w-3xl mx-auto flex flex-row items-center justify-between">
            
            <a href="/" class="select-none text-3xl sm:text-4xl md:text-5xl font-bold text-gray-500 my-6 tracking-wider">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500">yoyo</span> <span class="text-gray-200 mx-2">|</span> laravel app
            </a>

            <a href="https://github.com/clickfwd/yoyo-laravel-app">
                <svg class="w-8 h-8 text-gray-600 hover:text-pink-600 transition duration-500 ease-in-out" viewBox="0 0 24 24" fill="currentColor">
                    <g data-name="Layer 2"><rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"/><path d="M12 1A10.89 10.89 0 0 0 1 11.77 10.79 10.79 0 0 0 8.52 22c.55.1.75-.23.75-.52v-1.83c-3.06.65-3.71-1.44-3.71-1.44a2.86 2.86 0 0 0-1.22-1.58c-1-.66.08-.65.08-.65a2.31 2.31 0 0 1 1.68 1.11 2.37 2.37 0 0 0 3.2.89 2.33 2.33 0 0 1 .7-1.44c-2.44-.27-5-1.19-5-5.32a4.15 4.15 0 0 1 1.11-2.91 3.78 3.78 0 0 1 .11-2.84s.93-.29 3 1.1a10.68 10.68 0 0 1 5.5 0c2.1-1.39 3-1.1 3-1.1a3.78 3.78 0 0 1 .11 2.84A4.15 4.15 0 0 1 19 11.2c0 4.14-2.58 5.05-5 5.32a2.5 2.5 0 0 1 .75 2v2.95c0 .35.2.63.75.52A10.8 10.8 0 0 0 23 11.77 10.89 10.89 0 0 0 12 1" data-name="github"/></g>
                </svg>        
            </a>
            
        </div>

        <div class="p-6 sm:p-12 bg-gray-50">

            <div class="max-w-3xl mx-auto">

                <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-96" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                    <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-teal-300" fill="currentColor"></rect>
                    </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"></rect>
                </svg>

                <x-component-wrapper heading="Counter">

                    <x-counter-alpine-event />
                
                </x-component-wrapper>
                       
                @foreach([
                    [
                        'name' => 'upload',
                        'heading' => 'Image Upload',
                    ],
                    [
                        'name' => 'nesting-parent',
                        'heading' => 'Nested Wishlists',
                    ],
                    [
                        'name' => 'wishlist-counter',
                        'heading' => 'Wishlist Counter',
                        'attributes' => ['id' => 'wishlist-counter'],
                    ],
                    [
                        'name' => 'live-search',
                        'heading' => 'Live Search',
                    ],
                    [
                        'name' => 'todo',
                        'heading' => 'Todo',
                    ],
                    [
                        'name' => 'load-more',
                        'heading' => 'Load More',
                    ],
                    [
                        'name' => 'pagination',
                        'heading' => 'Pagination',
                    ],
                    [
                        'name' => 'dynamic-content',
                        'heading' => 'Onload Dynamic Content',
                    ],
                    [
                        'name' => 'polling',
                        'heading' => 'Polling',
                    ],
                    [
                        'name' => 'form',
                        'heading' => 'Form',
                    ],
                ] as $yoyo_component)

                @php 
                // Reset previous attribute values
                $attributes = [];
                extract($yoyo_component);
                @endphp

                <x-component-wrapper 
                    :heading="$heading"
                >
                    @yoyo($name, $variables ?? [], $attributes ?? [])
                
                </x-component-wrapper>
                
                @endforeach    

            </div>

        </div>

        <div class="py-8 w-full flex">
            <p class="text-sm text-gray-500 mx-auto">?? <?php echo date('Y'); ?> ClickFWD LLC. All rights reserved.</p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js"></script>

</body>

</html>