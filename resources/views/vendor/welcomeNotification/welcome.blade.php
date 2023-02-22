<x-guest-layout>
    <form method="POST">
        @csrf
        <input type="hidden" name="email" value="{{ $user->email }}" />
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="@error('password') is-invalid @enderror block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="password-confirm" :value="__('Confirm Password')" />

            <x-text-input id="password-confirm" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4" type="submit">
                {{ __('Save password and login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
