<x-guest-layout>
    <x-auth-card>
        <!-- Card Title -->
        <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800 mb-6">
            Login
        </h2>

        <!-- Session Status -->
        @if ( session('error'))
            <div class="py-3 px-5 mb-4 bg-red-100 text-red-900 text-sm rounded-md border border-red-200" role="alert">
                    {{ session('error') }}
            </div>
        @endif


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Username Input -->
            <x-label for="username" :value="__('Username')"/>
            <x-input id="username" type="text" name="username" :value="old('username')" placeholder="Username" autofocus autocomplete="off"/>

            <!-- Password Input -->
            <x-label for="password" class="mt-4" 
                    :value="__('Password')"/>
            <x-input id="password" 
                    type="password" 
                    name="password" 
                    :value="old('password')" 
                    placeholder="Password" 
                    autofocus autocomplete="off"/>

            <!-- Button Input -->
            <x-button class="mb-6">
                {{ __('Masuk') }}
            </x-button>

            {{-- <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div> --}}
        </form>
    </x-auth-card>
</x-guest-layout>
