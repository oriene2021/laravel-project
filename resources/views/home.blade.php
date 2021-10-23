<x-app-layout>
    <x-card>
        <x-notification/>
        <p class="font-bold text-blue-500 py-4 text-xl">
            List Data Anggota
        </p>
        <x-datatable :anggotas="$anggotas"/>
    </x-card>
</x-app-layout>
