<x-app-layout>
    <x-card>
        <x-notification/>
        <p class="font-bold text-blue-500 py-4 text-xl">
            List Data Anggota
        </p>
        <a href="{{ route('anggota.create') }}">
            <button class="btn btn-sm mb-2 border-0 bg-green-500 bg-transparent hover:bg-green-600 rounded-lg text-white">
                Tambah
            </button>
        </a>
        <x-datatable :anggotas="$anggotas"/>
    </x-card>
</x-app-layout>
