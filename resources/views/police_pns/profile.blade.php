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
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('police_pns.dashboard') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M160 80c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-352zM0 272c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 160c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48L0 272zM368 96l32 0c26.5 0 48 21.5 48 48l0 288c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48z"/></svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Ringkasan</span>
                    </a>
                </li>
    
                <li class="mt-4 w-full">
                    <a class="py-2.7 py-3 bg-white/40 rounded-md text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('profile') }}">
                        <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>                        </div>
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
                        <a class="opacity-50 text-slate-700">Dasbor</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['>']" aria-current="page">Pengaturan Akun</li>
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
        <div class="w-full px-6 mx-auto">
            <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
                <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
            </div>
            <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
                <div class="flex flex-wrap -mx-3">
                    <div class="flex-none w-auto max-w-full px-3">
                        <div class="text-base ease-soft-in-out h-40 w-40 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                            @if(Auth::user()->profile_photo && file_exists(public_path('storage/images/'.Auth::user()->profile_photo)))
                                <a href="{{ asset('storage/images/'.Auth::user()->profile_photo) }}" target="_blank">
                                    <img src="{{ asset('storage/images/'.Auth::user()->profile_photo) }}" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
                                </a>
                            @else
                                <a href="{{ asset('images/empty_profile_photo.png') }}" target="_blank">
                                    <img src="{{ asset('images/empty_profile_photo.png') }}" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="flex-none w-auto max-w-full px-3 my-auto">
                        <div class="h-full">
                            <h5 class="mb-1">{{ Auth::user()->pangkat }}</h5>
                            <p class="mb-0 font-semibold leading-normal text-md">{{ Auth::user()->name }}</p>
                        </div>
                    </div>
                    <div class="w-auto px-3 mx-auto mt-4 sm:my-auto mr-8 ">
                        <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3">
                            <div class="-mx-3 py-2 px-4">
                                <div class="mx-3">
                                    @if($isOnLeave)
                                        <span class="text-red-500 font-semibold">Sedang Cuti/Izin</span>
                                    @else
                                        <span class="text-slate-500 font-semibold">Tidak Sedang Cuti/Izin</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cards -->

        {{-- section 2 --}}
        <div class=" p-6 mx-auto">
            @if($errors->any())
                <div class="mx-4 flex bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="px-4 flex justify-center items-center bg-red-500">
                        <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"/>
                        </svg>
                    </div>
                    
                    <div class="-mx-3 py-2 px-4">
                        <div class="mx-3">
                            <span class="text-red-500 font-semibold">Upss.. </span>
                            <ul>
                                @foreach ($errors->all() as $item)
                                <li> {{ $item }} </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            <div class="flex flex-wrap justify-center">
                <div class="w-full max-w-full px-3 mt-4 xl:w-4/12">
                    <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-2xl">
                            <h6 class="mb-0 text-center text-lg font-semibold ">Informasi Pengguna</h6>
                            <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                            <table class="table-auto w-full text-md text-left text-inherit">
                                <tbody class="">
                                    <tr class="">
                                        <td class="px-2 py-2 font-semibold text-slate-700 w-1/2">NRP</td>
                                        <td class="px-2 py-2 w-1/2">: {{ Auth::user()->nrp }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-2 py-2 font-semibold text-slate-700 w-1/2">Jabatan</td>
                                        <td class="px-2 py-2 w-1/2">: {{ Auth::user()->position->name }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-2 py-2 font-semibold text-slate-700 w-1/2">Fungsi</td>
                                        <td class="px-2 py-2 w-1/2">: {{ Auth::user()->department->name }}</td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-2 py-2 font-semibold text-slate-700 w-1/2">Sisa Jatah Cuti Tahunan</td>
                                        <td class="px-2 py-2 w-1/2">: {{ Auth::user()->leave_quota }} Hari</td>
                                    </tr>
                                    <tr class="">
                                        <td class="px-2 py-2 font-semibold text-slate-700 w-1/3">Edit Foto Profil</td>
                                        <td class="px-2 py-2 w-2/3">: </td>
                                    </tr>
                                </tbody>
                            </table >
                            <table class="w-full mb-4 text-md text-inherit">
                                <tbody>
                                    <tr class="">
                                        <td class="px-2 py-2 w-full bg-slate-50">
                                            <form action="{{ route('update-profile-photo') }}" method="POST" enctype="multipart/form-data" class="">
                                                @csrf
                                                <div class="-mx-3 flex flex-wrap items-center justify-between">
                                                    <div class="w-full px-2">
                                                        <!-- Input File -->
                                                        <div class="w-full">
                                                            <div class="mb-2">
                                                                <input type="file" id="image" name="image" accept="image/*" 
                                                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-gray-700 file:text-white file:font-medium hover:file:bg-gray-500" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full text-center  mt-2 px-3">
                                                        <!-- Tombol Upload -->
                                                        <button type="submit" class="py-2 -mt-4 px-3 bg-gray-800 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                                            Terapkan
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="text-sm mt-2">*sebaiknya gunakan foto dengan ukuran 1:1</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                

                <div class="w-full max-w-full px-3 mt-4 xl:w-4/12">
                    <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-2xl">
                            <h6 class="mb-0 text-center text-lg font-semibold">Perbarui Kata Sandi</h6>
                            <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                            <form  action="{{ route('reset-password-self') }}" method="POST">
                                @csrf
                                <div>
                                    <label class="text-gray-700" for="old_password">Kata Sandi Lama</label>
                                    <input class="form-input w-full mt-2 rounded-md border border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2" 
                                    type="password" 
                                    name="old_password" id="old_password">
                                </div>

                                <div class="mt-4">
                                    <label class="text-gray-700" for="new_password">Kata Sandi Baru</label>
                                    <input class="form-input w-full mt-2 rounded-md border border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2" 
                                    type="password" 
                                    name="new_password" id="old_password">
                                </div>

                                <div class="flex justify-center my-4">
                                    <button type="submit" class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Simpan Kata Sandi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-full px-3 mt-4 xl:w-2/12">
                    <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-2xl">
                            <h6 class="mb-0 text-center text-lg font-semibold">Informasi</h6>
                            <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                            <p class="leading-normal text-md text-center">Apabila terdapat kesalahan data pribadi dapat mengajukan perbaikan data ke admin (BAG SDM)</p>
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
            

        {{-- end section 2 --}}
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

