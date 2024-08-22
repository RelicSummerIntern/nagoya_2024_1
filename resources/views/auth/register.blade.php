<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>



        <!-- height -->
        <div class="mt-4">

            <x-input-label for="height" :value="__('Height')" />
            <x-text-input id="height" class="block mt-1 w-full" type="text" name="height" :value="old('height')" required autofocus autocomplete="height" />
            <x-input-error :messages="$errors->get('height')" class="mt-2" />
        </div>




        <!-- weight -->
        <div class="mt-4">

            <x-input-label for="weight" :value="__('Weight')" />
            <x-text-input id="weight" class="block mt-1 w-full" type="text" name="weight" :value="old('weight')" required autofocus autocomplete="weight" />
            <x-input-error :messages="$errors->get('weight')" class="mt-2" />
        </div>


        <!-- sex -->
        <div class="mt-4">
            <x-input-label for="sex" :value="__('Sex')" />
            <select id="sex" name="sex" class="block mt-1 w-full" required autofocus>
                <option value="" disabled selected>選択してください</option>
                <option value="male" {{ old('sex') == 'male' ? 'selected' : '' }}>男</option>
                <option value="female" {{ old('sex') == 'female' ? 'selected' : '' }}>女</option>
            </select>
            <x-input-error :messages="$errors->get('sex')" class="mt-2" />
        </div>
        
        <!-- favorite_cotegory -->
        <div class="mt-4">
            <x-input-label for="favorite_cotegory" :value="__('Favorite_cotegory')" />
            
            <select id="favorite_cotegory" name="favorite_cotegory" class="block mt-1 w-full" required autofocus>
                <option value="" disabled selected>選択してください</option>
                <option value="male" {{ old('favorite_cotegory') == 'cool' ? 'selected' : '' }}>かっこいい</option>
                <option value="female" {{ old('favorite_cotegory') == 'cute' ? 'selected' : '' }}>かわいい</option>
                <option value="other" {{ old('favorite_cotegory') == 'other' ? 'selected' : '' }}>その他</option>
            </select>
            
            <x-input-error :messages="$errors->get('favorite_cotegory')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
