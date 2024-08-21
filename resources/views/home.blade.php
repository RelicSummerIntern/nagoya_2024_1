<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            古着みっけ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('post.index') }}" class="bg-white border-b border-gray-200 p-6 block w-full text-center
                font-semibold text-gray-800 hover:bg-gray-100 text-decoration-none">
                    メニュー画面へ移動
                </a>
            </div>
        </div>

        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <img src="{{ asset('images/r7bfpj56.png') }}" width="100%" alt="背景画像です" >
        </div>
    </div>
    
</x-app-layout>
