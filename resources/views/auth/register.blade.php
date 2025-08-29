<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <x-form-heading-1>{{ __("Create Account") }}</x-form-heading-1>
        <p>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Daniel Soriano" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </p>
        <p class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </p>
        <p class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="Enter Secret Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </p>
        <p class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Repeat Secret Password"
                             />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </p>
        <aside class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <x-primary-button class="ms-4">{{ __('Register') }}</x-primary-button>
        </aside>
    </form>
</x-guest-layout>