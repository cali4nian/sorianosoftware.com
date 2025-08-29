<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <x-form-heading-1>{{ __('Reset Password') }}</x-form-heading-1>
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <p>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </p>
        <p class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" placeholder="Enter New Secret Password" />
        </p>
        <p class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block w-full mt-1"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Repeat New Secret Password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </p>
        <aside class="flex items-center justify-end mt-4">
            <x-primary-button>{{ __('Reset Password') }}</x-primary-button>
        </aside>
    </form>
</x-guest-layout>