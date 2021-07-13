<x-guest-layout>
    <x-auth-card>
        <!-- Card Title -->
        <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800 mb-6">
            Register New Client
        </h2>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.storePenghuni') }}">
            @csrf

            <!-- pj Input -->
            <x-label for="pj" :value="__('Penanggung Jawab')"/>
            <x-option-select name="pj" id="roleid">
                <x-slot name="option">
                    <option>---Pilih Penanggung Jawab---</option>
                    @foreach ($pj as $pj)
                        <option value="{{ $pj->id }}">{{ $pj->nama }}</option>
                    @endforeach
                </x-slot>
            </x-option-select>

            <!-- Nama Lengkap Input -->
            <x-label class="mt-4" for="namalengkap" :value="__('nama Lengkap')" />
            <x-input id="namalengkap" type="text" name="namalengkap" :value="old('namalengkap')" placeholder="Nama Lengkap" autofocus autocomplete="off" />

            <!-- Name Panggilan-->
            <div class="mb-6">
                <x-label for="namepgl" :value="__('Nama Panggilan')" />

                <x-input id="namepgl" type="text" name="namepgl" :value="old('namepgl')" placeholder="Nama Panggilan" required autofocus />
            </div>

            <!-- Foto -->
            <!-- <div class="mb-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="file" name="image" placeholder="Choose image" id="image">
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>


            </div> -->

            <!-- Tanggal Lahir -->
            <div class="mb-6">
                <x-label for="tgllahir" :value="__('Tanggal Lahir')" />

                <x-input id="tgllahir" type="date" name="tgllahir" :value="old('tgllahir')" placeholder="Tanggal Lahir" required />
            </div>

            <!-- Gender -->
            <div class="mb-6">
                <x-label for="gender" :value="__('Gender')" />
                <x-option-select name="gender" id="gender">
                    <x-slot name="option">
                        <option value="0">
                            <--Pilih-->
                        </option>
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </x-slot>
                </x-option-select>
            </div>

            <!-- Agama -->
            <div class="mb-6">
                <x-label for="agama" :value="__('Agama')" />

                <x-input id="agama" type="text" name="agama" placeholder="Agama" />

            </div>


            <!-- Alamat -->
            <div class="mb-10">
                <x-label for="alamat" :value="__('Alamat')" />

                <x-input id="alamat" type="text" placeholder="Alamat" name="alamat" required />
            </div>

            <!-- no telp -->
            <div class="mb-10">
                <x-label for="notelp" :value="__('No Telpon')" />

                <x-input id="notelp" type="text" placeholder="No Telepon" name="notelp" required />
            </div>


            <!-- asal -->
            <div class="mb-10">
                <x-label for="asal" :value="__('Asal Daerah')" />

                <x-input id="asal" type="text" placeholder="Asal Daerah" name="asal" required />
            </div>

            <!-- ruang -->
            <div class="mb-10">
                <x-label for="ruang" :value="__('Ruang')" />

                <x-input id="ruang" type="text" placeholder="Ruang" name="ruang" required />
            </div>

            <!-- tgl masuk -->
            <div class="mb-10">
                <x-label for="tglmasuk" :value="__('Tanggal Masuk')" />

                <x-input id="tglmasuk" type="date" placeholder="tglmasuk" name="tglmasuk" required />
            </div>



            <!-- Button Input -->
            <x-button class="mb-6">
                {{ __('Input') }}
            </x-button>

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>