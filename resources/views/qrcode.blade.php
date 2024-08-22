<x-app-layout>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- ヘッダー -->
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold text-gray-900">
                    {{ __('会員情報') }}
                </h2>
            </div>

            <!-- QRコード画像表示 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-8">
                <img src="{{ asset('img/qr.png') }}" class="w-full h-auto" alt="会員QRコード">
            </div>

            <!-- ポイント情報 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">保有ポイント</h3>
                <p class="text-gray-700 mb-2">
                    保有ポイント: {{ 1170 }} ポイント
                </p>
            </div>
        </div>
    </div>
</x-app-layout>