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
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap">
            {{-- <img src="../assets/img/logo-ct.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" /> --}}
            <span class="font-bold transition-all duration-200 ease-nav-brand">SIPERPOL</span>
            </a>
        </div>
      
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
      
        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Dasbor</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('admin_sdm.dashboard') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(153.000000, 2.000000)">
                                    <path class="fill-slate-800 opacity-60" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                                    <path class="fill-slate-800" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Analisis Cuti</span>
                    </a>
                </li>
    
    
                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Pengajuan Cuti</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('pending-leave-req') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(1.000000, 0.000000)">
                                    <path class="fill-slate-800 opacity-60" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                                    <path class="fill-slate-800" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                    <path class="fill-slate-800" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Belum Dikonfirmasi</span>
                    </a>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('leave-req-history') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>document</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(154.000000, 300.000000)">
                                    <path class="fill-slate-800 opacity-60" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                                    <path class="fill-slate-800" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Riwayat Pengajuan Cuti</span>
                    </a>
                </li>

                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Manajemen Akun</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('account') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(1.000000, 0.000000)">
                                    <path class="fill-slate-800 opacity-60" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                                    <path class="fill-slate-800" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                    <path class="fill-slate-800" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Lihat Akun</span>
                    </a>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('create-account') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>document</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(154.000000, 300.000000)">
                                    <path class="fill-slate-800 opacity-60" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                                    <path class="fill-slate-800" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Tambah Akun</span>
                    </a>
                </li>
                <li class="mt-8 w-full xl:hidden">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('logout') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>logout</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(154.000000, 300.000000)">
                                    <path class="fill-slate-800 opacity-60" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                                    <path class="fill-slate-800" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
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
                        <a class="opacity-50 text-slate-700" href="javascript:;">Manajemen Akun</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['>']" aria-current="page">Lihat Akun</li>
                </ol>
            </nav>

            <div class="flex items-center justify-end mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center justify-end sm:ml-auto md:pr-4">
                    <li class="mx-2 flex items-center">
                        <a href="" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
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

        <!-- cards -->
        <div class="flex flex-wrap w-full px-6 py-6 mx-auto">
            <div class="w-full px-3 mb-6 lg:mb-0 lg:w-2/3 lg:flex-none">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 bg-gradient-to-r from-yellow-400 to-amber-500 text-white text-center rounded-t-2xl">
                        <h2 class="text-2xl font-bold">Detail Pengajuan Cuti</h2>
                        <p class="text-sm mt-1">Diajukan pada: {{ \Carbon\Carbon::parse($leave->created_at)->format('d M Y') }}</p>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class=" items-center w-full -mb-2 align-top border-gray-200 text-slate-500">
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
                                <a class="mb-0 text-md leading-tight underline" href="{{ route('detail-account', $leave->user->id) }}">{{ $leave->user->name }}</a>
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
                                        Satuan / Bagian
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
                                        Posisi
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
                                        Jenis Cuti
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
                                        Periode Cuti
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
                                @if ( $leave->leave_status == 'Diizinkan')
                                        <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Diizinkan</span>
                                    @elseif ( $leave->leave_status == 'Ditolak')
                                        <span class="bg-gradient-to-tl from-rose-600 to-rose-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Ditolak</span>
                                    @else 
                                        <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Diproses</span>
                                        <span class="bg-gradient-to-tl from-purple-600 to-purple-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave->leave_status }}</span>
                                    @endif
                            </td>
                        </tr>

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
                            <td class="p-2  align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="grid grid-cols-2 gap-2">
                                    <a href="{{ asset('storage/evident/' . $leave->evident_1) }}" 
                                        target="_blank"
                                        class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                        Lihat bukti/surat 1
                                    </a>
                                    <a 
                                        href="{{ route('download.evident', $leave->evident_1) }}"
                                        class="bg-gradient-to-tl from-cyan-600 to-cyan-400 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                        Unduh bukti/surat 1
                                    </a>
                                    @if ( $leave->evident_2 != null)
                                        <a href="{{ asset('storage/evident/' . $leave->evident_2) }}" 
                                            target="_blank"
                                            class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                            Lihat bukti/surat 2
                                        </a>
                                        <a 
                                            href="{{ route('download.evident', $leave->evident_2) }}"
                                            class="bg-gradient-to-tl from-cyan-600 to-cyan-400 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                            Unduh bukti/surat 2
                                        </a>
                                    @endif
                                </div>
                            </td>
                            
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Aksi
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 md:w-3/4  align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="grid grid-cols-2 gap-2">
                                    <a href="{{ asset('storage/evident/' . $leave->evident_1) }}" 
                                        target="_blank"
                                        class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                        Disetujui Pihak SDM
                                    </a>
                                    <a 
                                        href="{{ route('download.evident', $leave->evident_1) }}"
                                        class="bg-gradient-to-tl from-rose-600 to-rose-400 px-2.5 py-2 text-xs rounded-sm text-center font-bold uppercase leading-none text-white">
                                        Tidak Disetujui Pihak SDM
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="px-4 font-semibold">
                                        Atur Status lanjutan 
                                    </div>
                                <div class="flex flex-col justify-center">
                                </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-md leading-tight">:</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                <div class="w-full mb-6 lg:mb-0 lg:flex-none mt-2 items-center" >
                                    <div class="relative flex flex-col min-w-0 break-words shadow-soft-xl rounded-2xl bg-clip-border">
                                        <div class="flex-auto p-4">
                                                <div class="flex flex-wrap -mx-3">
                                                    <div class="grid grid-cols-2 gap-2">
                                                        <form action="" method="">
                                                            <select name="department" id="department"
                                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                                                <option value="" disabled selected>Pilih Status</option>
                                                                {{-- @forelse($departments as $department) --}}
                                                                    <option value="">Disetujui Kapolres</option>
                                                                    <option value="">Disetujui Disetujui SDM</option>
                                                                    {{-- @empty --}}
                                                                        <option value="" disabled>Tidak ada Satuan/Bagian tersedia</option>
                                                                {{-- @endforelse  --}}
                                                            </select>
                                                            <button type="submit" class="p-2.5 rounded-md text-sm font-semibold leading-normal group text-slate-500 bg-amber-300" href="">
                                                                Simpan Status
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        
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
                        <h5 class="pt-2 mb-6 font-bold text-lg text-white">Alur Persetujuan</h5>

                        <p class="text-white"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi asperiores nesciunt nemo sapiente eius aut vel repellendus sed dolorem. Aut, voluptas. Quas, ut neque? Suscipit a sunt dolore magni libero?</p>
                        <ol class=" pl-2 list-decimal text-white">
                            <li>
                                Jenis cuti disesuaikan dengan cuti yang ingin anda ajukan. Jika ingin mengajukan cuti tahunan mohon perhatikan sisa kuota cuti tahunan anda.
                            </li>
                            <li>
                                Jenis cuti disesuaikan dengan cuti yang ingin anda ajukan. Jika ingin mengajukan cuti tahunan mohon perhatikan sisa kuota cuti tahunan anda.
                            </li>
                            <li>
                                nanti saya coba pelajari perkap dulu yah gess
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
        

        

        <!-- end cards -->
    <!-- end Navbar -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

    </script>
</body>

</html>

