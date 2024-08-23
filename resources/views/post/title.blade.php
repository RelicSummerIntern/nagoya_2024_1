<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('メニュー画面') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-around space-x-8"> <!-- Flexコンテナ -->

                <!-- 服選択 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center"> <!-- 中央寄せ -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <img src="{{ asset('img/test.png') }}" alt="" width="300">  
                    </div>
                    <a href="{{ route('postc') }}" class="inline-block py-2 px-4 btn btn-primary text-decoration-none mt-4">
                        {{ __('Clothes') }}
                    </a>
                </div>

                <!-- 店舗 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center"> <!-- 中央寄せ -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">        
                        <img src="{{ asset('img/test.png') }}" alt="おすすめの服" width="300">             
                    </div>
                    <a href="{{ route('stores') }}" class="inline-block py-2 px-4 btn btn-primary text-decoration-none mt-4">
                        {{ __('Stores') }}
                    </a>
                </div>

                <!-- Map -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center"> <!-- 中央寄せ -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">        
                        <img src="{{ asset('img/test.png') }}" alt="おすすめの服" width="300">             
                    </div>
                    <a href="{{ route('map') }}" class="inline-block py-2 px-4 btn btn-primary text-decoration-none mt-4">
                        {{ __('Map') }}
                    </a>
                </div>
            </div> <!-- Flexコンテナ終了 -->
        </div>
    </div>
</x-app-layout>
