<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <!-- Name -->
            <div>
                <label for="name" :value="__('Name')" />
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" :value="__('Email')" />
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <!-- Password -->
            <div class="mt-4">
            </div>
            <!-- Confirm Password -->
            <div class="mt-4">
            </div>
            <div class="flex items-center justify-end mt-4">
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
