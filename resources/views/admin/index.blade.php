<x-app-layout>
    <div class="max-w-full flex justify-between mx-auto px-4 pt-12 sm:px-10 lg:px-40">
        <h2 class="text-2xl sm:text-4xl font-semibold leading-tight">Admin Dashboard</h2>
        <a class="text-sm bg-red-500 hover:bg-red-700 text-white py-3 px-4 rounded focus:outline-none transition duration-200" href="{{ route('logout') }}">{{ __('Log out') }}</a>
    </div>
    <section class="flex bg-gray-100 py-6 md:py-12 px-4 md:px-40">
        
        <div class="container mx-auto">
            <div class="grid grid-rows-2 grid-cols-1 gap-10">
                <!-- START: Menu Data User -->
                <div 
                class="relative col-span-1 row-span-1 md:col-span-1 bg-blue-400 transition duration-300 shadow-none h-full hover:shadow-lg hover:bg-blue-500 rounded-3xl"
                style="height: 180px">
                    <div class="overlay inset-0 md:bottom-auto flex justify-center md:items-center flex-col pl-24 md:pl-0 pt-0 md:pt-16">
                        <h5 class="text-2xl font-semibold text-white">Data User</h5>
                    </div>
                    <a href="{{ route('admin.dataUser') }}" class="absolute inset-0 z-10 cursor-pointer"></a>
                </div>
                <!-- END: Menu Berat Badan -->
                <!-- START: Menu Data User -->
                <div 
                class="relative col-span-1 row-span-1 md:col-span-1 bg-green-400 transition duration-300 shadow-none h-full hover:shadow-lg hover:bg-green-500 rounded-3xl"
                style="height: 180px">
                    <div class="overlay inset-0 md:bottom-auto flex justify-center md:items-center flex-col pl-24 md:pl-0 pt-0 md:pt-16">
                        <h5 class="text-2xl font-semibold text-white">Data Pegawai</h5>
                    </div>
                    <a href="{{ route('admin.dataPegawai') }}" class="absolute inset-0 z-10 cursor-pointer"></a>
                </div>
                <!-- END: Menu Berat Badan -->
            </div>
            {{-- <h1>{{ Auth::user()->username }}</h1> --}}
        </div>
    </section>
</x-app-layout>