<x-app-layout>
    <div class="max-w-full flex justify-start mx-auto px-4 py-12 sm:px-10 lg:px-40">
        <a class="text-sm bg-gray-500 hover:bg-gray-700 text-white py-3 px-4 rounded focus:outline-none transition duration-200" href="{{ route('admin.dashboard') }}">{{ __('Back') }}</a>
    </div>
    <div class="max-w-full flex justify-between mx-auto px-4 py-12 sm:px-10 lg:px-40">
        <h2 class="text-2xl sm:text-4xl font-semibold leading-tight">Daftar Pegawai</h2>
        <a class="text-sm bg-green-500 hover:bg-green-700 text-white py-3 px-4 rounded focus:outline-none transition duration-200" href="{{ route('admin.tambahPegawai') }}">{{ __('Tambah Pegawai') }}</a>
    </div>
    <div class="w-full px-4 sm:px-10 lg:px-40">
        <div class="shadow-lg overflow-x-auto rounded border-b border-gray-200 mb-10">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 font-semibold text-base">Nama</th>
                        <th class="w-1/3 text-left py-3 px-4 font-semibold text-base">Posisi</th>
                        <th class="text-left py-3 px-4 font-semibold text-base">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($pegawai as $pegawai)
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">{{ $pegawai->nama }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $pegawai->posisi }}</td>
                        <td class="p-3 px-4 flex">
                            <a href="dataPegawai/edit/{{ $pegawai->id }}" class="mr-3 text-sm bg-blue-100 hover:bg-blue-300 text-black py-2 px-4 rounded focus:outline-none transition duration-200">Edit</a>
                            <a href="dataPegawai/delete/{{ $pegawai->id }}" class="mr-3 text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none transition duration-200">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>