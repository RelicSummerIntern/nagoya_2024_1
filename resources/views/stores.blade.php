<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stores') }}
            <link rel="stylesheet" href="/css/chat.css">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row justify-center space-y-6 sm:space-y-0 sm:space-x-4"> <!-- Flexコンテナ -->
                <!-- 店舗1の情報カード -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <p class="text-lg font-bold mb-4">古着屋バナナ</p>
                    <a href="{{ route('chat_banana') }}" class="inline-block py-2 px-4 btn btn-primary text-white text-decoration-none hover:bg-blue-700">
                        Chat
                    </a>
                    <a href="{{ route('map') }}" class="inline-block py-2 px-4 btn btn-primary text-white text-decoration-none hover:bg-blue-700">
                        {{ __('Map') }}
                    </a>
                </div>
                <!-- 店舗2の情報カード -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <p class="text-lg font-bold mb-4">古着屋ミカン</p>
                    <a href="{{ route('chat_mikan') }}" class="inline-block py-2 px-4 btn btn-primary text-white text-decoration-none hover:bg-blue-700">
                        Chat
                    </a>
                    <a href="{{ route('map') }}" class="inline-block py-2 px-4 btn btn-primary text-white text-decoration-none hover:bg-blue-700">
                        {{ __('Map') }}
                    </a>
                </div>
            </div> <!-- Flexコンテナ終了 -->
        </div>
    </div>
</x-app-layout>

