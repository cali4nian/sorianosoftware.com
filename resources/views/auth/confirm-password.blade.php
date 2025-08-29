<x-guest-layout>
    <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </p>
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <x-form-heading-1>{{ __('Confirm Password') }}</x-form-heading-1>
        <p>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Enter Secret Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </p>
        <aside class="flex justify-end mt-4">
            <x-primary-button>{{ __('Confirm') }}</x-primary-button>
        </aside>
    </form>
</x-guest-layout>