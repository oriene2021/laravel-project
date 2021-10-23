<x-app-layout>
    <x-slot name="header">
        <div class="my-4 rounded-xl bg-gray-100 shadow-lg py-1 px-4">
            <x-notification/>
            <p class="font-bold text-blue-500 py-4 text-xl">
                List Data Anggota
            </p>
            <x-datatable :anggotas="$anggotas"/>
        </div>
    </x-slot>
</x-app-layout>
