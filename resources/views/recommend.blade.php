<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('レコメンド') }}
        </h2>
    </x-slot>

    <?php
        //データベースからデータを取得          
        $randomPicture = null;
        $categoryId = $user->favorite_cotegory;
        $storeClothes = App\Models\StoreClothes::where('category_id', $categoryId)
            ->inRandomOrder()
            ->first();
        if ($storeClothes) {
            $randomPicture = $storeClothes->picture;
        }
        $store = App\Models\Store::where('id', $storeClothes->store_id)->first();
    ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-around space-x-8"> <!-- Flexコンテナ -->

                <!-- ユーザーが選んだ服 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <p>この服には...</p> 
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <img src="{{ asset($selectedClothes->picture) }}" alt="ユーザーの服" width="300">  
                    </div>
                </div>

                <!-- おすすめの服 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <p>こんな服がおすすめ!!!</p>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">        
                        <img src="{{ asset($randomPicture) }}" alt="おすすめの服" width="300">             
                    </div>
                    <?php echo $store->name; ?>            
                </div>

            </div> <!-- Flexコンテナ終了 -->

            <div class="my-4">
            <a href="{{ route('payment') }}" class="inline-block py-2 px-4 btn btn-primary text-decoration-none">
                {{ __('購入する') }}
            </a>

            <a href="{{ route('chat', ['storeClothes' => $storeClothes->id]) }}" class="inline-block ml-4 py-2 px-4 btn btn-secondary text-decoration-none">
                {{ __('Chat') }}
            </a>


            <a href="{{ route('map') }}" class="inline-block ml-4 py-2 px-4 btn btn-secondary text-decoration-none">
                {{ __('Map') }}
            </a>
        </div>
        </div>
    </div>
</x-app-layout>