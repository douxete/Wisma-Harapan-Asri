<x-guest-layout>
    <x-auth-card>
        <!-- Card Title -->
        <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800 mb-6">
            Reset Password
        </h2>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="dataUser/reset-password/{{ $users->id }}">
            @csrf

            <!-- Password Input -->
            <x-label for="password" class="mt-4" 
                    :value="__('New Password')"/>
            <x-input id="password" 
                    type="password" 
                    name="password"  
                    placeholder="Password" 
                    autofocus autocomplete="off"/>

            <x-button>
                    {{ __('Reset Password') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
