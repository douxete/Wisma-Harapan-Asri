<x-guest-layout>
    <x-auth-card>
        <!-- Card Title -->
        <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800 mb-6">
            Edit User
        </h2>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('admin.updateUser') }}">
            @csrf

            <x-input type="hidden" name="id" value="{{ $users->id }}"></x-input>
            <!-- role Input -->
            <x-label for="roleid" :value="__('Role')"/>
            <x-option-select name="roleid" id="roleid">
                <x-slot name="option">
                    <option value="{{ $users->roleid }}" selected hidden>{{ $users->description }}</option>
                    @foreach ($role as $role)
                        <option value="{{ $role->id }}">{{ $role->description }}</option>
                    @endforeach
                </x-slot>
            </x-option-select>

            <!-- Pegawai Input -->
            <x-label class="mt-4" for="pegawaiid" :value="__('Pegawai')"/>
            <x-option-select name="pegawaiid" id="pegawaiid">
                <x-slot name="option">
                    <option value="{{ $users->pegawaiid }}" selected hidden>{{ $users->nama }}</option>
                    @foreach ($pegawai as $pegawai)
                        <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                    @endforeach
                </x-slot>
            </x-option-select>

            <!-- Username Input -->
            <x-label class="mt-4" for="username" :value="__('Username')"/>
            <x-input id="username" type="text" name="username" value="{{ $users->username }}" autocomplete="off"/>

            <!-- Status Input -->
            <x-label class="mt-4" for="status" :value="__('Status')"/>
            <x-label for="status" class="pt-4">
                    <input type="radio" name="status" id="status" class="form-radio h-5 w-5 text-gray-600" value="0" {{ $users->status == 0 ? 'checked' : '' }}><span class="ml-2 text-gray-700">Active</span>
                    <input type="radio" name="status" id="status" class="form-radio h-5 w-5 text-gray-600" value="1" {{ $users->status == 1 ? 'checked' : '' }}><span class="ml-2 text-gray-700">Banned</span>
            </x-label>

            <!-- Button Input -->
            <x-button class="mb-6">
                {{ __('Update') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
