<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Prenom -->
            <div class="mb-4">
                <x-input-label for="firstname" :value="__('Prénom')" class="text-white text-lg"/>
                <x-text-input id="firstname" class="block mt-1 w-full text-black" type="text" name="firstname" :value="old('firstname')" required autofocus />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>

            <!-- Nom -->
            <div>
                <x-input-label for="name" :value="__('Nom')" class="text-white text-lg"/>
                <x-text-input id="name" class="block mt-1 w-full text-black" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="text-white text-lg"/>
                <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" class="text-white text-lg"/>

                <x-text-input id="password" class="block mt-1 w-full text-black"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')" class="text-white text-lg"/>

                <x-text-input id="password_confirmation" class="block mt-1 w-full text-black"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" class="text-white"/>
            </div>

               <!-- Birth_date -->
               <div class="mt-4">
                <x-input-label for="birth_date" :value="__('Date de naissance')" class="text-white text-lg"/>

                <x-text-input id="birth_date" class="block mt-1 w-full text-black"
                                type="date"
                                name="birth_date" />

                <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
            </div>



            <div class="flex items-center justify-end mt-4">
                <a class="underline  text-gray-200  hover:text-gray-50" href="{{ route('login') }}">
                    {{ __('Déjà inscrit ?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
