<x-app-layout>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- ヘッダー -->
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold text-gray-900">
                    {{ __('お店のマップ') }}
                </h2>
            </div>

            <!-- マップ画像表示 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-8">
                <img src="{{ asset('images/map.png') }}" class="w-full h-auto" alt="お店のマップ">
            </div>

            <!-- 追加情報 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">お店の情報</h3>
                <p class="text-gray-700 mb-2">
                    住所: 〒123-4567 東京都千代田区1-2-3
                </p>
                <p class="text-gray-700 mb-2">
                    電話番号: 03-1234-5678
                </p>
                <p class="text-gray-700">
                    ホームページ: <a href="https://example.com" class="text-blue-600 hover:underline" target="_blank">https://example.com</a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
