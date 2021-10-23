<x-app-layout>
	<x-card>
		<p class="font-bold text-green-500 py-4 text-xl">
			Tambah Data Anggota
		</p>
		@if (count($errors))
		<x-error_form/>
		@endif

		<div class="mb-4 rounded-xl bg-white px-4 py-1">
			<div class="pb-2 pt-1 text-gray-600">
				<x-field_add/>
			</div>
		</div>
	</x-card>
</x-app-layout>
