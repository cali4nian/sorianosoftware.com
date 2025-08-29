<x-guest-layout>
    <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </p>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <x-form-heading-1>{{ __('Forgot Password') }}</x-form-heading-1>
        <p>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </p>
        <aside class="flex items-center justify-end mt-4">
            <x-primary-button>{{ __('Email Password Reset Link') }}</x-primary-button>
        </aside>
    </form>
</x-guest-layout>