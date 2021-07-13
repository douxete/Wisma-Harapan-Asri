<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full py-3 mt-8 bg-green-500 rounded-sm
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-green-600 hover:shadow-none
                    transition duration-200']) }}>
    {{ $slot }}
</button>