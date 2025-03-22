<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPERPOL</title>
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
</head>
<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-200 ">
    <!-- sidenav  -->
    <aside id="sidebar" class="max-w-68.5 ease-nav-brand z-990 fixed inset-y-0 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-s border-0 bg-neutral-800 p-0 text-white antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0">
        <a class=" px-8 py-6 m-0 text-sm " href="{{ route('police_pns.dashboard') }}" >
            <img class="w-50 mx-auto " src="{{ asset('images/logo2.png') }}" alt="logo" /> <br>
        </a>
      
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
      
        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Dasbor</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 py-3 bg-white/40 rounded-md text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('police_pns.dashboard') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M160 80c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-352zM0 272c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 160c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48L0 272zM368 96l32 0c26.5 0 48 21.5 48 48l0 288c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Ringkasan</span>
                    </a>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('profile') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Pengaturan Akun</span>
                    </a>
                </li>
    
    
                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Pengajuan Cuti/Izin</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('create-leave-req') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 352L96 96c0-35.3 28.7-64 64-64l256 0c35.3 0 64 28.7 64 64l0 197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7L160 416c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-48 0 0-48c0-8.8-7.2-16-16-16l-32 0zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-160 0C60.9 512 0 451.1 0 376L0 152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88l160 0z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Form Pengajuan Cuti/Izin</span>
                    </a>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('leave-req') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Riwayat Pengajuan Cuti/Izin</span>
                    </a>
                </li>
                <li class="mt-8 w-full xl:hidden">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('logout') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">      
    
        <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 bg-white transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <!-- breadcrumb -->
                <h6 class="mb-0 font-bold capitalize">SIPERPOL</h6>
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="leading-normal text-sm">
                    <a class="opacity-50 text-slate-700" href="javascript:;">Dasbor</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['>']" aria-current="page">Ringkasan</li>
                </ol>
            </nav>

            <div class="flex items-center justify-end mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center justify-end sm:ml-auto md:pr-4">
                    <li class="mx-2 flex items-center">
                        <a class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                        <i class="fa fa-user sm:mr-1"></i>
                        <span class="hidden xl:inline">{{  Auth::user()->name }}</span>
                        </a>
                    </li>
                    
                    <li class="mx-2 items-center hidden xl:inline">
                        <a class="inline-block px-4 py-2 mb-0 mr-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" 
                            href="{{ route('logout') }}">Logout
                        </a>
                    </li>

                    <li class="mx-auto flex items-center xl:hidden">
                        <a class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                        <div class="w-4.5 overflow-hidden">
                            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                        </div>
                        </a>
                    </li>
                    
                </div>
            </div>
        </div>
    </nav>

            <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">

            <h5 class="mb-4 px-2 text-slate-700 text-lg font-semibold border-b border-gray-400/50  lg:w-1/4">
                Ringkasan
            </h5>  
            <!-- row 1 -->
            <div class="flex flex-wrap -mx-3">

            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3 items-center justify-center">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">Jatah Cuti Tahunan</p>
                        
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block text-center rounded-full bg-gradient-to-tl from-purple-700 to-pink-500">
                            <h5 class="mb-0 px-2 text-white text-sm font-semibold">
                                {{ Auth::user()->leave_quota }} Hari
                            </h5>                            
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- card2 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4 items-center justify-center">
                    <div class="flex flex-row -mx-3 items-center justify-center">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total cuti/izin yang diajukan</p>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block text-center rounded-full bg-gradient-to-tl from-sky-500 to-sky-300">
                            <h5 class="px-2 text-white font-semibold text-sm">
                                {{ $total_leave }}
                            </h5>                            
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3 items-center justify-center">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">Cuti/izin disetujui</p>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block text-center rounded-full bg-gradient-to-tl from-lime-700 to-lime-500">
                            <h5 class="px-2 text-sm font-semibold text-white">
                                {{ $approved_leave }}
                            </h5>                            
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- card4 -->
            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal">Cuti/izin Ditolak</p>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div class="inline-block text-center rounded-full bg-gradient-to-tl from-rose-700 to-pink-500">
                            <h5 class="px-2 text-sm font-semibold text-white">
                                {{ $rejected_leave }}
                            </h5>                            
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- cards row 2 -->
            <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full px-3 mb-6 lg:mb-0 lg:w-3/4 lg:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3 items-center justify-center">
                        <div class="max-w-full px-3 lg:flex-none">
                            <div class="flex flex-col h-full">
                                <p class="mb-4 text-xl font-semibold text-center">Status Cuti/Izin Terbaru</p>
                                <div class="flex-auto px-0 pt-0 pb-2">
                                    <div class="p-0 overflow-x-auto ">
                                      <table class="items-center w-full align-top border-gray-200 text-slate-500">
                                        <tbody>
                                            @forelse ($ongoing_leave as $leave)
                                                <tr class="mt-2">
                                                    <td 
                                                    class="py-3 px-2 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">
                                                    Diajukan Pada
                                                        
                                                    </td>
                                                    <td class="p-2 align-middle bg-transparent border border-gray-200 whitespace-nowrap shadow-transparent">
                                                        <div class="flex px-2 py-1">
                                                            <div class="flex flex-col justify-center">
                                                                <h6 class="mb-0 text-sm leading-normal"> {{ ($leave->created_at)->locale('id')->translatedFormat('d F Y') }} </h6> <span class="hidden">12 Desember 2025</span>
                                                                <p class="mb-0 text-xs leading-tight text-slate-400"> {{ ($leave->created_at)->format('H.i') }} WIB </p><span class="hidden">23.58 WIB</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td 
                                                    class="py-3 px-2 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">
                                                    Jenis Cuti/Izin
                                                    </td>
                                                    <td class="p-2 align-middle bg-transparent border border-gray-200 whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 text-md leading-tight">{{ $leave->leave_type->type }}</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td 
                                                    class="py-3 px-2 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">
                                                    Periode Cuti/Izin
                                                    </td>
                                                    <td class="p-2 text-left align-middle bg-transparent border border-gray-200 whitespace-nowrap shadow-transparent">
                                                        <span class="text-sm font-semibold leading-tight text-slate-400">{{ \Carbon\Carbon::parse($leave->start_leave)->locale('id')->translatedFormat('d F Y') }} - {{ \Carbon\Carbon::parse($leave->end_leave)->locale('id')->translatedFormat('d F Y') }} </span>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td 
                                                    class="py-3 px-2 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">
                                                    Status
                                                    </td>
                                                    <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border border-gray-200 whitespace-nowrap shadow-transparent">
                                                        @if ( $leave->leave_status->status == 'Disetujui Kapolres/Wakapolres')
                                                            <span class="m-2 bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-1 text-sm rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->status }}</span> <br>
                                                            <span class="m-2 bg-gradient-to-tl from-purple-600 to-purple-300 px-2.5 py-1 text-sm rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->information }}</span>
                                                        @elseif ( $leave->leave_status->status == 'Ditolak Kasat/kabag' || $leave->leave_status->status == 'Ditolak SDM' || $leave->leave_status->status == 'Ditolak Kapolres/Wakapolres')
                                                            <span class="m-2 bg-gradient-to-tl from-rose-600 to-rose-300 px-2.5 py-1 text-sm rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->status }}</span> <br>
                                                            <span class="m-2 bg-gradient-to-tl from-purple-600 to-purple-300 px-2.5 py-1 text-sm rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->information }}</span>
                                                        @else 
                                                            <span class="m-2 bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 py-1 text-sm rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->status }}</span> <br>
                                                            <span class="m-2 bg-gradient-to-tl from-purple-600 to-purple-300 px-2.5 py-1 text-sm rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->information }}</span>
                                                        @endif   
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent text-red-500 font-semibold text-center">
                                                        Anda belum pernah mengajukan cuti/izin
                                                    </td>
                                                </tr>
                                                
                                            @endforelse
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>

                                <a class="mt-auto mb-0 text-md underline font-semibold leading-normal group text-slate-500" href="{{ route('leave-req') }}">
                                    Lihat Selengkapnya
                                    <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 lg:w-1/4 lg:flex-none">
                <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('./assets/img/ivancik.jpg')">
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4 text-center">
                    @if ($is_on_leave)
                        <h5 class="pt-2 mb-2 font-bold text-white">Anda sedang dalam masa cuti/izin</h5>
                        <p class="text-white">Sisa waktu cuti: <span> {{ $remain_leave }} Hari</span></p>
                    @else
                        <h5 class="pt-2 mb-6 font-bold text-white">Anda tidak sedang dalam masa cuti/izin</h5>
                        
                    @endif
                    </div>
                </div>
                </div>
            </div>
            </div>

            <h5 class="mt-6 px-2 text-slate-700 text-lg font-semibold border-b border-gray-400/50  lg:w-1/4">
                Panduan
            </h5>  

            <div class="flex flex-wrap mt-4 -mx-3">
                <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-3/12 lg:flex-none">
                    <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col text-white break-words rounded-2xl border-0 border-solid bg-gradient-to-tl from-gray-900 to-slate-800 bg-clip-border">
                    <div class="flex-auto p-4">
                        <h6 class="mt-4 mb-0 ml-2 font-semibold">Panduan Cuti/Izin</h6>
                        <div class="w-full px-6 mx-auto max-w-screen-2xl rounded-xl">
                            <div class="flex flex-wrap mt-0 -mx-3">
                                <div class="flex-none  max-w-full py-4 pl-0 pr-3 mt-0">
                                    <div class="flex mb-2">
                                        <div class="flex items-center justify-center w-5 h-5 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl bg-gradient-to-tl from-purple-700 to-pink-500 text-neutral-900">
                                        <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>document</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(154.000000, 300.000000)">
                                                    <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                    <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                </g>
                                                </g>
                                            </g>
                                            </g>
                                        </svg>
                                        </div>
                                        <a class="mb-0 text-md leading-tight underline" href="{{ asset('storage/bukupanduan/buku_panduan.pdf') }}" target="_blank">Lihat Panduan</a>
                                    </div>                      
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            
            </div>

            <footer class="flex pt-4 ">
                <div class="w-full px-6 mx-auto ">
                    <div class="flex  items-center -mx-3">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:flex-none">
                        <div class="text-sm leading-normal text-center text-slate-500">
                        ©
                        <script>
                            document.write(new Date().getFullYear() + ",");
                        </script>
                        made with love by
                        <a class="font-semibold text-slate-700">Polres Humbahas</a>
                        for a better Human Resource
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end cards -->
    <!-- end Navbar -->
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("sidebar");
        const sidenavTrigger = document.querySelector("[sidenav-trigger]");
        const sidenavClose = document.querySelector("[sidenav-close]");

        // Fungsi untuk toggle sidebar
        function toggleSidebar() {
            if (sidebar.classList.contains("-translate-x-full")) {
                sidebar.classList.remove("-translate-x-full");
                sidebar.classList.add("translate-x-0");
            } else {
                sidebar.classList.add("-translate-x-full");
                sidebar.classList.remove("translate-x-0");
            }
        }

        // Tambahkan event click pada tombol sidenav-trigger
        sidenavTrigger.addEventListener("click", toggleSidebar);

        // Jika ada tombol close, tambahkan event click untuk menutup sidebar
        if (sidenavClose) {
            sidenavClose.addEventListener("click", function () {
                sidebar.classList.add("-translate-x-full");
                sidebar.classList.remove("translate-x-0");
            });
        }
    });
</script>
</body>

</html>

