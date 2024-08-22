<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('レコメンド') }}
        </h2>
    </x-slot>

    <?php
        //tatsuki's memo
        /*
        // ユーザーが選んだ服の画像のパスを保存
        session(['path' => 'value']);

        // ユーザーが選んだ服の画像のパスを取得
        $value = session('path');

        
        // 店の名前を取得
        $storeName = StoreClothes::whereHas('categories', function($query) use ($categoryId) {
            $query->where('id', $categoryId);
        })->inRandomOrder()->first()->stores()->first()->name;

        // 店の名前を表示
        echo '<p>Store Name: ' . $storeName . '</p>';
        */ 
    ?>
    <?php    
        //get data from database          
        $randomPicture = null;
        $categoryId = $user->favorite_cotegory;
        $storeClothes = App\Models\StoreClothes::where('category_id', $categoryId)
            ->inRandomOrder()
            ->first();
        if ($storeClothes) {
            $randomPicture = $storeClothes->picture;
        }
    ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <img src="{{ asset($selectedClothes->picture) }}" alt="ユーザーの服", width = 300>  
                <p>この服には...</p> 
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset($selectedClothes->picture) }}" alt="ユーザーの服", width = 300>  
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p>こんな服がおすすめ!!!</p>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">        
                    <img src="{{ asset($randomPicture) }}" alt="おすすめの服", width = 300>             
                </div>           
            </div>
        </div>
        
    </div>
</x-app-layout>