<x-app-layout>
    <div class="max-w-full flex justify-start mx-auto px-4 py-12 sm:px-10 lg:px-40">
        <a class="text-sm bg-gray-500 hover:bg-gray-700 text-white py-3 px-4 rounded focus:outline-none transition duration-200" href="{{ route('admin.dashboard') }}">{{ __('Back') }}</a>
    </div>
    <div class="max-w-full flex justify-between mx-auto px-4 py-12 sm:px-10 lg:px-40">
        <h2 class="text-2xl sm:text-4xl font-semibold leading-tight">Daftar User</h2>
        <a class="text-sm bg-green-500 hover:bg-green-700 text-white py-3 px-4 rounded focus:outline-none transition duration-200" href="{{ route('admin.tambahUser') }}">{{ __('Tambah User') }}</a>
    </div>
    <div class="w-full px-4 sm:px-10 lg:px-40">
        <div class="shadow-lg overflow-x-auto rounded border-b border-gray-200 mb-10">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr class="text-white uppercase text-base leading-normal">
                        <th class="text-left py-3 px-6 font-semibold">Role</th>
                        <th class="text-left py-3 px-6 font-semibold">Nama Pegawai</th>
                        <th class="text-left py-3 px-6 font-semibold">Username</th>
                        <th class="text-center py-3 px-6 font-semibold">Status</th>
                        <th class="text-left py-3 px-6 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-base font-light">
                    @foreach ($users as $users)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="font-medium">{{ $users->description }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                <span>{{ $users->nama }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                <span>{{ $users->username }}</span>
                            </div>
                        </td>
                        @if ( $users->status == 0)
                        <td class="py-3 px-6 text-center whitespace-nowrap">
                            <span class="bg-green-200 text-green-700 py-1 px-3 rounded-full text-sm">Active</span>
                        </td>
                        @else
                        <td class="py-3 px-6 text-center whitespace-nowrap">
                            <span class="bg-red-200 text-red-700 py-1 px-3 rounded-full text-sm">Banned</span>
                        </td>
                        @endif
                        
                        <td class="p-3 px-4 flex">
                            <a href="dataUser/edit/{{ $users->id }}" class="mr-3 text-sm bg-blue-100 hover:bg-blue-300 text-black py-2 px-4 rounded focus:outline-none transition duration-200">Edit</a>
                            <a href="dataUser/forgot-password/{{ $users->id }}" class="mr-3 text-sm md:text-base xl:py-1 text-indigo-500 hover:text-indigo-900">Reset Password</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>