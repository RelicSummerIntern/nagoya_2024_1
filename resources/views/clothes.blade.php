<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clothes') }}
            </h2>
            <div class="my-2">
                <a href="{{ route('decision') }}" class="inline-block py-2 px-4 btn btn-primary text-decoration-none">
                    {{ __('服を追加する') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <img src="{{ asset('img/test.png') }}" alt="" style="width: 300px; height: 200px;">
        <p class="text-gray-600">{{ $selectedClothesId}}</p>

        <!-- ラジオボタン -->
        <div class="mt-5">
            <label>
                <input type="radio" name="option" value="clothes_id">
                選択
            </label>
        </div>
    </div>
</x-app-layout>
