<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clothes') }}
            </h2>
            <div class="my-2">
                <a href="{{ route('postc') }}" class="inline-block py-2 px-4 btn btn-primary text-decoration-none">
                    {{ __('服選択画面に戻る') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <img src="{{ asset($selectedClothes->picture) }}" alt="" style="width: 300px; height: 200px;">
        <p class="text-gray-600">{{ $selectedClothes->id}}</p>
    </div>
</x-app-layout>
