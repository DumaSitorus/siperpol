<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
</head>
<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-200 ">
    <!-- sidenav  -->
    <aside id="sidebar" class="max-w-68.5 ease-nav-brand z-990 fixed inset-y-0 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-s border-0 bg-neutral-800 p-0 text-white antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0">
        <a class=" px-8 py-6 m-0 text-sm " href="{{ route('department_head.dashboard') }}" >
            <img class="w-50 mx-auto " src="{{ asset('images/logo2.png') }}" alt="logo" /> <br>
        </a>
      
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
      
        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Dasbor</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('department_head.dashboard') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M160 80c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-352zM0 272c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 160c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48L0 272zM368 96l32 0c26.5 0 48 21.5 48 48l0 288c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Ringkasan </span>
                    </a>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('profile-head') }}">
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
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('create-head-leave-req') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 352L96 96c0-35.3 28.7-64 64-64l256 0c35.3 0 64 28.7 64 64l0 197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7L160 416c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-48 0 0-48c0-8.8-7.2-16-16-16l-32 0zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-160 0C60.9 512 0 451.1 0 376L0 152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88l160 0z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Form Pengajuan</span>
                    </a>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('head-leave-req') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Riwayat Pengajuan</span>
                    </a>
                </li>

                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Monitor Cuti/Izin Anggota</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('member-leave-req',  ['department_id' => Auth::user()->department_id]) }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M132.7 4.7l-64 64c-4.6 4.6-5.9 11.5-3.5 17.4s8.3 9.9 14.8 9.9l128 0c6.5 0 12.3-3.9 14.8-9.9s1.1-12.9-3.5-17.4l-64-64c-6.2-6.2-16.4-6.2-22.6 0zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64L64 128zm96 96a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM80 400c0-26.5 21.5-48 48-48l64 0c26.5 0 48 21.5 48 48l0 16c0 17.7-14.3 32-32 32l-96 0c-17.7 0-32-14.3-32-32l0-16zm192 0c0-26.5 21.5-48 48-48l64 0c26.5 0 48 21.5 48 48l0 16c0 17.7-14.3 32-32 32l-96 0c-17.7 0-32-14.3-32-32l0-16zm32-128a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM356.7 91.3c6.2 6.2 16.4 6.2 22.6 0l64-64c4.6-4.6 5.9-11.5 3.5-17.4S438.5 0 432 0L304 0c-6.5 0-12.3 3.9-14.8 9.9s-1.1 12.9 3.5 17.4l64 64z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Permohonan Anggota</span>
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
                        <a class="opacity-50 text-slate-700">Pengajuan Cuti/Izin</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Detail</li>
                    </ol>
                </nav>

                <div class="flex items-center justify-end mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center justify-end sm:ml-auto md:pr-4">
                        <li class="mx-2 flex items-center">
                            <a href="../pages/sign-in.html" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                            <i class="fa fa-user sm:mr-1"></i>
                            <span class="hidden xl:inline">{{  Auth::user()->name }}</span>
                            </a>
                        </li>
                        
                        <li class="mx-2 items-center hidden xl:inline">
                            <a class="inline-block px-4 py-2 mb-0 mr-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" 
                            href="{{ route('logout') }}">Logout</a>
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
        <!-- end Navbar -->

        <!-- cards -->
        <div class="flex flex-wrap w-full px-6 py-6 mx-auto">
            <div class="w-full px-3 mb-6 lg:mb-0 lg:w-2/3 lg:flex-none">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 bg-gradient-to-r from-yellow-400 to-amber-500 text-white text-center rounded-t-2xl">
                        <h2 class="text-2xl font-bold">Detail Pengajuan Cuti Anggota Fungsi</h2>
                        <p class="text-sm mt-1">Diajukan pada: {{ \Carbon\Carbon::parse($leave->created_at)->format('d M Y') }}</p>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class=" items-center w-full -mb-4 pb-4 align-top border-gray-200 text-slate-500">
                        <tbody>
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Nama Pengaju 
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <a class="mb-0 text-md leading-tight underline" href="{{ route('detail-account-user-head', $leave->user->id) }}">{{ $leave->user->name }}</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        NRP Pengaju 
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">{{ $leave->user->nrp }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Pangkat
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">{{ $leave->user->pangkat }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Fungsi
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">{{ $leave->user->department->name }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Jabatan
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">{{ $leave->user->position->name }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Jenis Cuti/Izin
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">{{ $leave->leave_type->type }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Periode Cuti/Izin
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">{{ \Carbon\Carbon::parse($leave->start_leave)->locale('id')->translatedFormat('d F Y') }} - {{ \Carbon\Carbon::parse($leave->end_leave)->locale('id')->translatedFormat('d F Y') }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Total Hari
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                {{ \Carbon\Carbon::parse($leave->start_leave)->diffInDays(\Carbon\Carbon::parse($leave->end_leave)) + 1 }} Hari
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Catatan 
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">{{ $leave->notes}}</p>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Status Pengajuan
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                @if ( $leave->leave_status->status == 'Disetujui Kapolres/Wakapolres')
                                    <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->status }}</span> <br>
                                    <span class="bg-gradient-to-tl from-purple-600 to-purple-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->information }}</span>
                                @elseif ( $leave->leave_status->status == 'Ditolak Kasat/kabag' || $leave->leave_status->status == 'Ditolak SDM' || $leave->leave_status->status == 'Ditolak Kapolres/Wakapolres')
                                    <span class="bg-gradient-to-tl from-rose-600 to-rose-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->status }}</span> <br>
                                    <span class="bg-gradient-to-tl from-purple-600 to-purple-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->information }}</span>
                                @else 
                                    <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->status }}</span> <br>
                                    <span class="bg-gradient-to-tl from-purple-600 to-purple-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status->information }}</span>
                                @endif
                            </td>
                        </tr>

                        @if ($leave->leave_status->status == 'Ditolak Kasat/kabag' || $leave->leave_status->status == 'Ditolak SDM' || $leave->leave_status->status == 'Ditolak Kapolres/Wakapolres')
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Alasan Penolakan 
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">{{ $leave->leave_rejection_reason}}</p>
                            </td>
                        </tr>
                        @endif

                        
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Surat / Bukti
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2  align-middle bg-transparent border-b border-gray-200 shadow-transparent">
                                <div class="grid grid-cols-2 gap-2">
                                    <a href="{{ asset('storage/evident/' . $leave->evident_1) }}" 
                                        target="_blank"
                                        class="bg-gradient-to-tl from-cyan-600 to-cyan-400 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                        Lihat bukti/surat 1
                                    </a>
                                    <a 
                                        href="{{ route('download.evident', $leave->evident_1) }}"
                                        class="bg-gradient-to-tl from-cyan-400 to-cyan-600 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                        Unduh bukti/surat 1
                                    </a>
                                    @if ( $leave->evident_2 != null)
                                        <a href="{{ asset('storage/evident/' . $leave->evident_2) }}" 
                                            target="_blank"
                                            class="bg-gradient-to-tl from-cyan-400 to-cyan-600 px-2.5 py-2.5 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                            Lihat bukti/surat 2
                                        </a>
                                        <a 
                                            href="{{ route('download.evident', $leave->evident_2) }}"
                                            class="bg-gradient-to-tl from-cyan-600 to-cyan-400 px-2.5 py-2.5 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                            Unduh bukti/surat 2
                                        </a>
                                    @endif
                                </div>
                            </td>
                            
                        </tr>
                        
                            
                        @if ($leave->leave_statuses_id == 1)
                            <tr>
                                <td class="p-2 align-middle bg-transparent  whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <div class="px-4 font-semibold">
                                            Aksi
                                        </div>
                                    <div class="flex flex-col justify-center">
                                </td>
                                <td class="p-2 align-middle bg-transparent  whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 text-md leading-tight">:</p>
                                </td>
                                <td class="p-2 md:w-3/4  align-middle bg-transparent  shadow-transparent">
                                        <form action="{{ route('approve-by-head', $leave->id) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                                Izinkan
                                            </button>
                                        </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 text-md leading-tight"></p>
                                </td>
                                <td class="p-2 md:w-3/4  align-middle bg-transparent border-b border-gray-200 shadow-transparent">
                                    <form action="{{ route('reject-by-head', $leave->id) }}" method="POST">
                                        @csrf
                                        <textarea name="leave_rejection_reason" id="leave_rejection_reason" rows="3" placeholder="Jika anda tidak mengizinkan, berikan alasan anda pada kolom ini"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md resize-none"></textarea>
                                                @if($errors->has('leave_rejection_reason'))
                                                    <p class="text-red-500 font-semibold"> {{ $errors->first('leave_rejection_reason') }} </p> <br>
                                                @endif
                                        <button type="submit"
                                            class="mb-8 bg-gradient-to-tl from-rose-600 to-rose-400 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                            Tidak Diizinkan
                                        </button>
                                    </form>
                            </td>
                            </tr>
                            @else
                            <tr class="my-8">
                                <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <div class="mb-8 px-4 font-semibold">
                                            Aksi
                                        </div>
                                    <div class="flex flex-col justify-center">
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                    <p class="mb-8 text-md leading-tight">:</p>
                                </td>
                                <td>
                                    <p class="mb-8 justify-center text-md leading-tight">Anda sudah mengonfirmasi pengajuan izin/cuti ini sebelumnya</p>
                                </td>
                            </tr>
                        @endif 
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            
            <div class="w-full max-w-full px-3 lg:w-1/3 lg:flex-none">
                <div class="border-black/12.5 shadow-soft-xl relative flex  min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="relative h-full overflow-hidden bg-cover rounded-xl">
                        <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                        <div class="relative z-10 flex flex-col flex-auto h-full p-4">

                        <p class="text-white"> 
                            Halo {{ Auth::user()->name }}, <br>
                            Pada Halaman ini anda perlu memperhatikan beberapa hal berikut:
                        </p>
                        <ol class=" pl-2 list-decimal text-white">
                            <li class="mt-2">
                                Pastikan membaca informasi detail cuti/izin dengan seksama sebelum menyetujui cuti/izin untuk diajukan ke pihak SDM
                            </li>
                            <li class="mt-2">
                                Untuk melihat informasi lengkap mengenai pengaju cuti/izin dapat menekan nama pengaju cuti/izin, maka akan langsung diarahkan ke halaman profilnya
                            </li>
                            <li class="mt-2">
                                Anda dapat melihat maupun mengunduh surat/bukti penyerta pengajuan cuti/izin dengan menekan tombol: <br>
                                <span class="bg-gradient-to-tl from-sky-600 to-sky-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Lihat Bukti/Surat</span>
                                <span class="bg-gradient-to-tl from-sky-600 to-sky-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Unduh Bukti/Surat</span>
                            </li>
                            <li class="mt-2">
                                Anda hanya dapat menyetujui izin yang berstatus: <br>
                                <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Diajukan</span>
                                <span class="bg-gradient-to-tl from-purple-600 to-purple-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Menunggu Persetujuan kepala satuan/bagian</span>
                            </li>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cards -->
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

