<section>
    <header>
        <h2 class="text-xl font-medium text-white  dark:text-gray-100">
            {{ __('Mettre à jour le mot de passe') }}
        </h2>

        <p class="mt-1 text-sm text-gray-300 dark:text-gray-400">
            {{ __('Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester en sécurité.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Mot de passe actuel')" class='text-gray-100 font-medium' />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Nouveau mot de passe')" class='text-gray-100 font-medium'/>
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')" class='text-gray-100 font-medium'/>
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text bg-red-500 border-[1px] p-1 rounded  text-white dark:text-gray-400"
                >{{ __('Votre nouveau mot de passe a été enregsitré.') }}</p>
            @endif
        </div>
    </form>
</section>

