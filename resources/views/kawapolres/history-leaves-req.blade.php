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
        <a class=" px-8 py-6 m-0 text-sm " href="{{ route('kawapolres.dashboard') }}" >
            <img class="w-50 mx-auto " src="{{ asset('images/logo2.png') }}" alt="logo" /> <br>
        </a>
      
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
      
        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Dasbor</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('kawapolres.dashboard') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M160 80c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-352zM0 272c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 160c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48L0 272zM368 96l32 0c26.5 0 48 21.5 48 48l0 288c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Analisis</span>
                    </a>
                </li>
    
    
                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Pengajuan Cuti/Izin</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('pending-leave-req-all') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Belum Dikonfirmasi</span>
                    </a>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 py-3 bg-white/40 rounded-md text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('leave-req-history-all') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Riwayat Pengajuan</span>
                    </a>
                </li>

                <li class="w-full mt-8">
                    <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Manajemen Akun</h6>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ Route('account-all') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM208 288l64 0c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Lihat Akun Pengguna</span>
                    </a>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('profile-kawapolres') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Akun Saya</span>
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
                        <a class="opacity-50 text-slate-700" href="javascript:;">Manajemen Akun</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['>']" aria-current="page">Lihat Akun</li>
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
        <div class="w-full px-6 py-6 mx-auto">

            <!-- cards row 1: title & search -->
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="mb-2 text-xl text-center font-bold">Riwayat Pengajuan Cuti/Izin Keseluruhan</h6>
                        </div>
                        <div class=" px-4 py-4 mx-auto md:ml-auto lg:ml-auto flex md:justify-end">
                            <form action="{{ route('leave-search') }}" class="flex md:flex-row gap-3" method="GET">
                                <div class="flex w-3/4">
                                    <input type="search" placeholder="Cari pengajuan cuti/izin"
                                        class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-slate-500 focus:outline-none focus:border-slate-500"
                                        name="search">
                                    <button type="submit" class="bg-slate-500 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Cari</button>
                                </div>
                                <select id="pricingType" name="column"
                                    class="w-1/4 h-10 border-2 border-slate-500 focus:outline-none focus:border-slate-500 text-slate-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
                                    <option value="name" selected="">Nama</option>
                                    <option value="nrp">NRP</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cards row 2: Disetujui Kapolres -->
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="mb-6 text-xl underline font-bold">DIIZINKAN</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class=" items-center w-full -mb-2 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="pl-14 pr-3 py-3 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Nama</th>
                                    <th class="py-3 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Diajukan Pada</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Jenis Cuti/Izin</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Periode Cuti/Izin</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Status Pengajuan</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($leaves_approved as $leave_approved)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div class="px-4">
                                                    {{ $loop->iteration }}
                                                </div>
                                                @if ($leave_approved->user)
                                                    <div class="flex flex-col justify-center">
                                                        <p class="mb-0 text-md text-semibold leading-tight">{{ $leave_approved->user->name }}</p>
                                                        <p class="mb-0 text-xs leading-tight text-slate-400"> NRP.{{ $leave_approved->user->nrp }} </p>
                                                    </div>
                                                @else
                                                    <div class="flex flex-col justify-center">
                                                        <p class="mb-0 text-md text-semibold leading-tight">Data pengguna tidak tersedia</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal"> {{ ($leave_approved->created_at)->locale('id')->translatedFormat('d F Y') }} </h6> <span class="hidden">12 Desember 2025</span>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400"> {{ ($leave_approved->created_at)->format('H.i') }} WIB </p><span class="hidden">23.58 WIB</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-md leading-tight text-center">{{ $leave_approved->leave_type->type }}</p>
                                        </td>
                                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <span class="text-sm font-semibold leading-tight text-slate-400">{{ \Carbon\Carbon::parse($leave_approved->start_leave)->locale('id')->translatedFormat('d F Y') }} - {{ \Carbon\Carbon::parse($leave_approved->end_leave)->locale('id')->translatedFormat('d F Y') }} </span>
                                        </td>
                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            @if ( $leave_approved->leave_status->status == 'Disetujui Kapolres/Wakapolres')
                                                <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Diizinkan</span>
                                            @elseif ( $leave_approved->leave_status->status == 'Ditolak Kasat/kabag' || $leave_approved->leave_status->status == 'Ditolak SDM' || $leave_approved->leave_status->status == 'Ditolak Kapolres/Wakapolres')
                                                <span class="bg-gradient-to-tl from-rose-600 to-rose-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Ditolak</span>
                                            @else 
                                                <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave_approved->leave_status->status }}</span>
                                            @endif
                                            
                                        </td>
                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <a class="bg-gradient-to-tl from-sky-600 to-sky-400 p-2.5 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white" href="{{ route('kawapolres-leave-req', $leave_approved->id) }}">Lihat Detail</a>
                                        </td>
                                @empty
                                    <tr>
                                        <td colspan="5" class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent text-red-500 font-semibold text-center">
                                            Data Pengajuan Cuti/Izin belum tersedia
                                        </td>
                                    </tr>
                                    </tr>
                                @endforelse
                            </tbody>
                            </table>
                            <div class="mt-8 m-4 flex items-center">
                                {{ $leaves_approved->links() }}
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>

            <!-- cards row 3: Diproses (Diajukan, disetujui kasat/bag, disetujui sdm SDM) -->
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="mb-6 text-xl underline font-bold">DIPROSES</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class=" items-center w-full -mb-2 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="pl-14 pr-3 py-3 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Nama</th>
                                    <th class="py-3 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Diajukan Pada</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Jenis Cuti/Izin</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Periode Cuti/Izin</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Status Pengajuan</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($leaves_processed as $leave_processed)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div class="px-4">
                                                    {{ $loop->iteration }}
                                                </div>
                                                @if ($leave_processed->user)
                                                    <div class="flex flex-col justify-center">
                                                        <p class="mb-0 text-md text-semibold leading-tight">{{ $leave_processed->user->name }}</p>
                                                        <p class="mb-0 text-xs leading-tight text-slate-400"> NRP.{{ $leave_processed->user->nrp }} </p>
                                                    </div>
                                                @else
                                                    <div class="flex flex-col justify-center">
                                                        <p class="mb-0 text-md text-semibold leading-tight">Data pengguna tidak tersedia</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal"> {{ ($leave_processed->created_at)->locale('id')->translatedFormat('d F Y') }} </h6> <span class="hidden">12 Desember 2025</span>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400"> {{ ($leave_processed->created_at)->format('H.i') }} WIB </p><span class="hidden">23.58 WIB</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-md leading-tight text-center">{{ $leave_processed->leave_type->type }}</p>
                                        </td>
                                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <span class="text-sm font-semibold leading-tight text-slate-400">{{ \Carbon\Carbon::parse($leave_processed->start_leave)->locale('id')->translatedFormat('d F Y') }} - {{ \Carbon\Carbon::parse($leave_processed->end_leave)->locale('id')->translatedFormat('d F Y') }} </span>
                                        </td>
                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            @if ( $leave_processed->leave_status->status == 'Disetujui Kapolres/Wakapolres')
                                                <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Diizinkan</span>
                                            @elseif ( $leave_processed->leave_status->status == 'Ditolak Kasat/kabag' || $leave_processed->leave_status->status == 'Ditolak SDM' || $leave_processed->leave_status->status == 'Ditolak Kapolres/Wakapolres')
                                                <span class="bg-gradient-to-tl from-rose-600 to-rose-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Ditolak</span>
                                            @else 
                                                <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave_processed->leave_status->status }}</span>
                                            @endif
                                            
                                        </td>
                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <a class="bg-gradient-to-tl from-sky-600 to-sky-400 p-2.5 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white" href="{{ route('kawapolres-leave-req', $leave_processed->id) }}">Lihat Detail</a>
                                        </td>
                                @empty
                                    <tr>
                                        <td colspan="5" class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent text-red-500 font-semibold text-center">
                                            Data Pengajuan Cuti/Izin belum tersedia
                                        </td>
                                    </tr>
                                    </tr>
                                @endforelse
                            </tbody>
                            </table>
                            <div class="mt-8 m-4 flex items-center">
                                {{ $leaves_processed->links() }}
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>

            <!-- cards row 3: Ditolak  -->
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="mb-6 text-xl underline font-bold">DITOLAK</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class=" items-center w-full -mb-2 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="pl-14 pr-3 py-3 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Nama</th>
                                    <th class="py-3 font-medium text-semibold text-left uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Diajukan Pada</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Jenis Cuti/Izin</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Periode Cuti/Izin</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Status Pengajuan</th>
                                    <th class="py-3 font-medium text-semibold text-center uppercase align-middle bg-gray-50 border-b border-gray-200 shadow-none border-b-solid tracking-none whitespace-nowrap text-slate-500">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($leaves_rejected as $leave_rejected)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div class="px-4">
                                                    {{ $loop->iteration }}
                                                </div>
                                                @if ($leave_rejected->user)
                                                    <div class="flex flex-col justify-center">
                                                        <p class="mb-0 text-md text-semibold leading-tight">{{ $leave_rejected->user->name }}</p>
                                                        <p class="mb-0 text-xs leading-tight text-slate-400"> NRP.{{ $leave_rejected->user->nrp }} </p>
                                                    </div>
                                                @else
                                                    <div class="flex flex-col justify-center">
                                                        <p class="mb-0 text-md text-semibold leading-tight">Data pengguna tidak tersedia</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal"> {{ ($leave_rejected->created_at)->locale('id')->translatedFormat('d F Y') }} </h6> <span class="hidden">12 Desember 2025</span>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400"> {{ ($leave_rejected->created_at)->format('H.i') }} WIB </p><span class="hidden">23.58 WIB</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-md leading-tight text-center">{{ $leave_rejected->leave_type->type }}</p>
                                        </td>
                                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <span class="text-sm font-semibold leading-tight text-slate-400">{{ \Carbon\Carbon::parse($leave_rejected->start_leave)->locale('id')->translatedFormat('d F Y') }} - {{ \Carbon\Carbon::parse($leave_rejected->end_leave)->locale('id')->translatedFormat('d F Y') }} </span>
                                        </td>
                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            @if ( $leave_rejected->leave_status->status == 'Disetujui Kapolres/Wakapolres')
                                                <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Diizinkan</span>
                                            @elseif ( $leave_rejected->leave_status->status == 'Ditolak Kasat/kabag' || $leave_rejected->leave_status->status == 'Ditolak SDM' || $leave_rejected->leave_status->status == 'Ditolak Kapolres/Wakapolres')
                                                <span class="bg-gradient-to-tl from-rose-600 to-rose-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Ditolak</span>
                                            @else 
                                                <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 py-1 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $leave_rejected->leave_status->status }}</span>
                                            @endif
                                            
                                        </td>
                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent">
                                            <a class="bg-gradient-to-tl from-sky-600 to-sky-400 p-2.5 text-xs rounded-sm py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white" href="{{ route('kawapolres-leave-req', $leave_rejected->id) }}">Lihat Detail</a>
                                        </td>
                                @empty
                                    <tr>
                                        <td colspan="5" class="p-2 align-middle bg-transparent border-b border-gray-200 whitespace-nowrap shadow-transparent text-red-500 font-semibold text-center">
                                            Data Pengajuan Cuti/Izin belum tersedia
                                        </td>
                                    </tr>
                                    </tr>
                                @endforelse
                            </tbody>
                            </table>
                            <div class="mt-8 m-4 flex items-center">
                                {{ $leaves_rejected->links() }}
                            </div>
                        </div>
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

