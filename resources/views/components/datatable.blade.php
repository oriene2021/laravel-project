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
                    @role('admin')
                    <th class="w-40">Aksi</th>
                    @endrole
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
                    @role('admin')
                    <td>
                        <div class="flex">
                            <a href="{{ route('anggota.edit', $anggota->id) }}">
                                <button type="button" class="btn btn-sm border-0 bg-yellow-500 hover:bg-yellow-600 rounded-lg text-white mr-2"> Ubah </button>
                            </a>
                            <div x-data="{ show: false }">
                                <button @click={show=true} type="button" class="btn btn-sm rounded-lg hover:bg-red-600 bg-red-500 border-0">Hapus</Button>
                                <div x-show="show" tabindex="0" class="absolute inset-0 text-gray-700" id="overlay">
                                    <div  @click.away="show = false" class="z-50 relative mt-20 mx-auto max-w-md">
                                        <div class="bg-gray-100 max-w-sm px-3 py-3 rounded-xl ">
                                            <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold"></button>
                                            <h4 class="text-lg font-bold mb-2">Konfirmasi Hapus</h4>
                                            <div>
                                                <p>Data yang telah dihapus tidak bisa dikembalikan, yakin hapus data?</p>
                                            </div>
                                            <div class="mt-3 flex justify-end space-x-2">
                                                <button @click={show=false} type="button" class="btn btn-sm bg-gray-500 hover:bg-gray-600  border-0 rounded-lg ">Batal</button>
                                                <form action="{{ route('anggota.destroy', $anggota->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm border-0 bg-red-500 hover:bg-red-600 rounded-lg text-white">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="z-40 overflow-auto inset-0  fixed bg-black opacity-50"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    @endrole
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