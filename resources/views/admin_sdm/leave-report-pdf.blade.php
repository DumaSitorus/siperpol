<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPERPOL</title>

    {{-- Tailwind (CDN) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Alpine (jika masih dibutuhkan) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- CSS khusus print --}}
    <style>
        /* Ukuran & margin kertas */
        @media print {
            @page {
                size: A4 portrait;
                margin: 1cm;
            }

            /* Hilangkan shadow, background, dll. */
            .shadow-soft-xl,
            .shadow-transparent,
            .bg-white { box-shadow: none !important; }

            /* Paksa full width dan pecah kata bila perlu */
            table { width: 100% !important; word-break: break-word; }

            /* Sembunyikan elemen yang tidak ingin dicetak */
            .no-print { display: none !important; }

            /* Heading selalu muncul di halaman baru */
            thead { display: table-header-group; }
        }
    </style>
</head>
<body class="font-sans text-sm antialiased leading-normal bg-gray-50">

    {{-- Header aplikasi (hanya di layar) --}}
    <header class="no-print flex items-center justify-between px-6 py-4 bg-white shadow">
        <a class="text-xl font-bold underline" href="{{ route('admin_sdm.dashboard') }}">Kembali</a>
        <button onclick="window.print()" class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
            Cetak ke PDF
        </button>
    </header>

    {{-- Konten --}}
    <main class="px-6 py-6 mx-auto bg-white shadow-soft-xl rounded-2xl">

        {{-- Judul --}}
        <h4 class="mb-4 text-center text-xl font-bold">Daftar Pengajuan Cuti dan Izin Personel Polres Humbahas</h4>

        {{-- Tabel Cuti Disetujui Kapolres --}}
        <div class="overflow-x-auto">
            <table class="w-full text-left border border-slate-800">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-3 border border-slate-800 text-center"></th>
                        <th class="py-2 px-3 border border-slate-800 text-center">Data Personel</th>
                        <th class="py-2 px-3 border border-slate-800 text-center">Diajukan Pada</th>
                        <th class="py-2 px-3 border border-slate-800 text-center">Jenis Cuti / Izin</th>
                        <th class="py-2 px-3 border border-slate-800 text-center">Periode</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($leaves_approved as $leave_approved)
                        <tr class="odd:bg-white even:bg-gray-50">
                            <td class="py-2 px-3 border border-slate-800 text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td class="py-2 px-3 border border-slate-800">
                                @if ($leave_approved->user)
                                    <div>
                                        <p class="font-semibold">{{ $leave_approved->user->name }}</p>
                                        <p class="text-xs text-slate-500">NRP. {{ $leave_approved->user->nrp }}</p>
                                        <p class="text-md text-slate-500"> {{ $leave_approved->user->department->name }}</p>
                                    </div>
                                @else
                                    <span class="italic text-red-600">User tidak ditemukan</span>
                                @endif
                            </td>
                            <td class="py-2 px-3 border text-center border-slate-800">
                                {{ $leave_approved->created_at->locale('id')->translatedFormat('d F Y') }}
                            </td>
                            <td class="py-2 px-3 border border-slate-800 text-center">
                                {{ $leave_approved->leave_type->type }}
                            </td>
                            <td class="py-2 px-3 border border-slate-800 text-center">
                                {{ \Carbon\Carbon::parse($leave_approved->start_leave)->locale('id')->translatedFormat('d F Y') }}
                                &ndash;
                                {{ \Carbon\Carbon::parse($leave_approved->end_leave)->locale('id')->translatedFormat('d F Y') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 px-3 text-center text-red-600 border border-slate-800">
                                Belum Ada Data Pengajuan Cuti dan Izin Personel
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </main>
</body>
</html>
