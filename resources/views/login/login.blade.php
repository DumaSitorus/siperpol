<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LOGIN</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>  
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="flex h-screen bg-[#a09292]">
            <div class="w-full max-w-sm m-auto bg-white rounded p-5">   
                  <header>
                    <img class="w-60 mx-auto mb-5" src="{{ asset('images/logo2.png') }}" />
                  </header>   
                  <form action="{{ route('auth.verify') }}" method="post">
                    @csrf
                    <div class="mx-auto max-w-xs">
                        <input
                            class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                            name="nrp" id="nrp"
                            type="number" 
                            placeholder="NRP" />
                        <input
                            class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                            name="password" id="password"
                            type="password" 
                            placeholder="Kata Sandi" />

                            <div class="my-4 flex flex-col items-center">
                                @if (session('msg'))
                                    <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden">
                                        <div class="px-4 flex justify-center items-center bg-red-500">
                                            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"/>
                                            </svg>
                                        </div>
                                        
                                        <div class="-mx-3 py-2 px-4">
                                            <div class="mx-3">
                                                <span class="text-red-500 font-semibold">Upsss..</span>
                                                <p class="text-gray-600 text-sm">{{ session('msg') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                        <button
                            class="mt-5 tracking-wide font-semibold bg-[#3b3333] text-gray-100 w-full py-4 rounded-lg hover:bg-[#8b4945] transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none"
                            type="submit">
                            <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                            </svg>
                            <span class="ml-3">
                                Login
                            </span>
                        </button>
                        
                    </div>
                </form> 
            </div>
        </div>

    </body>
</html>
