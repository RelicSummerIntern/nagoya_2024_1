<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('レコメンド') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                    この服には...
                
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <?php
                    /*
                    // ユーザーが選んだ服の画像のパスを保存
                    session(['path' => 'value']);

                    // ユーザーが選んだ服の画像のパスを取得
                    $value = session('path');

                    // StoreClothesテーブルのpictureからランダムにpathを選択
                    use App\Models\StoreClothes;
                    use App\Models\Category;

                    // ユーザーが指定したカテゴリーID
                    $categoryId = 1; // 例としてカテゴリーID 1を指定

                    // 指定したカテゴリーに属するStoreClothesからランダムにpictureを取得
                    $randomPicture = StoreClothes::whereHas('categories', function($query) use ($categoryId) {
                        $query->where('id', $categoryId);
                    })->inRandomOrder()->first()->picture;
                    
                    // 取得したランダムな画像を表示
                    echo '<img src="' . $randomPicture . '" alt="Recommended Clothing">';

                    // 店の名前を取得
                    $storeName = StoreClothes::whereHas('categories', function($query) use ($categoryId) {
                        $query->where('id', $categoryId);
                    })->inRandomOrder()->first()->stores()->first()->name;

                    // 店の名前を表示
                    echo '<p>Store Name: ' . $storeName . '</p>';
                    */
                ?>
                こんな服がおすすめ！
            </div>
        </div>
    </div>
</x-app-layout>