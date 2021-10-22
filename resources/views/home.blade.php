<x-app-layout>
    <x-slot name="header">
        <div class="my-4 rounded-xl bg-gray-100 shadow-lg py-1 px-4">
            <x-notification/>
            <p class="font-bold text-blue-500 py-4 text-xl">
                List Data Anggota
            </p>
            <a href="{{ route('anggota.create') }}">
                <button class="btn btn-sm mb-2 border-0 bg-green-500 bg-transparent hover:bg-green-600 rounded-lg text-white">
                    Tambah
                </button>
            </a>
            <div class="mb-4 mt-2 rounded-xl bg-white shadow-md">
                <div class="overflow-hidden align-middle shadow-lg rounded-xl">
                    <table class="table-auto w-full text-left">
                        <thead class="text-blue-500 uppercase">
                            <tr>
                                <th class="w-28 py-4 pl-4">No. Induk</th>
                                <th class="w-72">Nama</th>
                                <th class="w-60 ">Ranting Latihan</th>
                                <th class="w-36">Ikat Pinggang</th>
                                <th class="w-60">Detail</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 bg-white">
                            {{-- Data Table --}}
                            @forelse ($anggotas as $anggota)
                            <tr class="hover:bg-gray-200 hover:bg-opacity-50">
                                <td class="px-4">{{ $anggota->nomor_induk }}</td>
                                <td>{{ $anggota->nama }}</td>
                                <td>{{ $anggota->ranting_latihan }}</td>
                                <td>{{ $anggota->ikat_pinggang }}</td>
                                <td>
                                    <div class="collapse"> 
                                        <input type="checkbox">
                                        <div class="collapse-title">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                                            </svg>
                                        </div> 
                                        <div class="collapse-content"> 
                                            <table class="table-auto text-sm">
                                                <tr>
                                                    <th class="h-8 align-bottom text-blue-500">Tempat Tanggal Lahir</th>
                                                </tr>
                                                <tr>
                                                    <td>{{ $anggota->tempat_lahir }}, {{ $anggota->tanggal_lahir }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="h-8 align-bottom text-blue-500">Jenis Kelamin</th>
                                                </tr>
                                                <tr>
                                                    <td>{{ $anggota->jenis_kelamin }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="h-8 align-bottom text-blue-500">Alamat</th>
                                                </tr>
                                                <tr>
                                                    <td>{{ $anggota->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="h-8 align-bottom text-blue-500">Jabatan</th>
                                                </tr>												
                                                <tr>
                                                    <td>{{ $anggota->jabatan }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="pl-4">Data Kosong</td>
                            </tr>
                            @endforelse
                            {{-- End of Data Table --}}
                        </tbody>
                    </table>
                    {{ $anggotas->links('components/pagination') }}
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
