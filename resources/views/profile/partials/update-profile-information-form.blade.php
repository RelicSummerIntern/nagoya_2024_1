<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- height -->
        <div class="mt-4">
            <x-input-label for="height" :value="__('Height')" />
            <x-text-input id="height" class="block mt-1 w-full" type="text" name="height" :value="old('height', $user->height)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('height')" class="mt-2" />
        </div>

        <!-- weight -->
        <div class="mt-4">
            <x-input-label for="weight" :value="__('Weight')" />
            <x-text-input id="weight" class="block mt-1 w-full" type="text" name="weight" :value="old('weight', $user->weight)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('weight')" class="mt-2" />
        </div>

        <!-- sex -->
        <div class="mt-4">
            <x-input-label for="sex" :value="__('Sex')" />
            <select id="sex" name="sex" class="block mt-1 w-full" :value="old('sex', $user->sex)" required autocomplete="username">
                <option value=2 {{ old('sex', $user->sex) == 2 ? 'selected' : '' }}>女</option>
                <option value=1 {{ old('sex', $user->sex) == 1 ? 'selected' : '' }}>男</option>
            </select>
            <x-input-error :messages="$errors->get('sex')" class="mt-2" />
        </div>
        
        <!-- favorite_cotegory -->
        <div class="mt-4">
            <x-input-label for="favorite_cotegory" :value="__('Favorite Category')" />
            <select id="favorite_cotegory" name="favorite_cotegory" class="block mt-1 w-full" :value="old('favorite_cotegory', $user->favorite_cotegory)" required autocomplete="username">
                <option value=1 {{ old('favorite_cotegory', $user->favorite_cotegory) == 1 ? 'selected' : '' }}>かっこいい</option>
                <option value=2 {{ old('favorite_cotegory', $user->favorite_cotegory) == 2 ? 'selected' : '' }}>かわいい</option>
                <option value=3 {{ old('favorite_cotegory', $user->favorite_cotegory) == 3 ? 'selected' : '' }}>その他</option>
            </select>
            
            <x-input-error :messages="$errors->get('favorite_cotegory')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
