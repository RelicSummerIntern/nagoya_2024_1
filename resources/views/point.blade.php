
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('決済完了画面') }}
            </h2>
        </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <a class="bg-white border-b border-gray-200 p-6 block w-full text-center
                font-semibold text-gray-800 hover:bg-gray-100 text-decoration-none">
                    商品お買い上げありがとうございました！
                </a>
            </div>

            <!-- ポイント残高表示 -->

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <img src="{{ asset('images/r7bfpj56.png') }}" width="100%" alt="背景画像です" >
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6">
                <p class="text-gray-800 text-lg font-semibold">
                    付与ポイント: {{ 30 }} ポイント
                </p>    
                <p class="text-gray-800 text-lg font-semibold">
                    現在のポイント残高: {{ 1123 }} ポイント
                </p>
            </div>
        </div>
    </div>
</x-app-layout>


