<x-guest-layout>
    <x-auth-card>
        <!-- Card Title -->
        <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800 mb-6">
            Tambah Pegawai
        </h2>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('admin.storePegawai') }}">
            @csrf

            <!-- nama Input -->
            <x-label for="nama" :value="__('Nama')"/>
            <x-input id="nama" type="text" name="nama" :value="old('name')" autofocus autocomplete="off"/>

            <!-- Posisi Input -->
            <x-label class="mt-4" for="posisi" :value="__('Posisi')"/>
            <x-input id="posisi" type="text" name="posisi" :value="old('posisi')" autofocus autocomplete="off"/>

            <!-- Button Input -->
            <x-button class="mb-6">
                {{ __('Tambah') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
