<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" title='home'>
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-zinc-50 text-lg" />
                <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2 font-medium  bg-gray-100 rounded-sm p-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" class="text-zinc-50 text-lg" />

                <x-text-input id="password" class="block mt-1 w-full text-black"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2 font-medium text-white bg-red-400 rounded-sm p-1" />
            </div>

           





            <!-- Signup  -->

            <div class="grid justify-items-end ">
                <a class="underline  text-gray-200  hover:text-gray-50 mt-1  " href="{{ route('register') }}">
                    {{ __("S'enregistrer") }}
                </a>
            </div>

            <!-- Remember Me -->

            <div class="block -mt-3 ml-1">
                <label for="remember_me" class="inline-flex items-center ">
                    <input id="remember_me" type="checkbox" class="rounded  border-gray-300 dark:border-gray-700 text-red-600 shadow-sm focus:ring-red-500 dark:focus:ring-red-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-200  hover:text-gray-50 ">{{ __('Me souvenir') }}</span>
                </label>
           
            </div>

          

            <!-- Password lost -->

            <div class="flex items-center justify-end mt-4 ">
                @if (Route::has('password.request'))
                    <a class="underline  text-gray-200  hover:text-gray-50 mr-2 " href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif

              

                <x-primary-button class="ml-3">
                    {{ __('Connexion') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
