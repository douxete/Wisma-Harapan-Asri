<!-- Root element for center items -->
<div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Auth-card container -->
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <!-- Auth-card -->
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 px-6 py-10 sm:px-10 sm:py-6 bg-white rounded-lg shadow-md lg:shadow-lg">
            
            {{ $slot }}
            
        </div>
    </div>
</div>