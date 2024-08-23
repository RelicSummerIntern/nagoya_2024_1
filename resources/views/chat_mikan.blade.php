<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('古着屋ミカン') }}
            <link rel="stylesheet" href="/css/chat.css">
        </h2>
    </x-slot>
        <div class="max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
            <div class="my-4">
                <div class="icon"></div>
                <div class="chat_box">
                    <img src = "{{asset('img/test.png')}}" width = 150 class = "decision_img";>
                    <a href="{{ route('payment') }}" class="chatbutton">
                        <font color = "000000" size = 5;>{{ __('購入') }}</font>
                    </a>
                </div>
                <div class="chat_box">
                    @php
                    $text = "こんにちは！\n古着屋ミカンです!\nこちらの商品の詳細やコーディネートについて質問があれば気軽にご相談ください!";
                    @endphp
                    <font color = "000000" size = 5;>{!! nl2br(e($text)) !!}</font>
                </div>

                @if(isset($_GET['name']) != null) 
                <div class="hidden sm:flex sm:items-center sm:ml-7" >
                    <div class="userchatbox">
                        <font color = "000000" size = 5;>{!! nl2br(e($_GET['name'])) !!}</font>
                    </div>
                </div>
                @endif
            </div>
            <div class="my-4">
                <form method = "GET" action="{{ route('post.chat') }}" class="Footer">
                    <input type = "text" placeholder = "チャットを入力 " name="name">
                    <input type = "submit" value = "送信">
                </form>
            </div>
            <div class="my-4">
            @if (!empty($posts))
                <ul>
                    <li class="mb-6 bg-white border rounded-lg p-4">
                        <h3 class="text-lg font-bold mb-2 border-bottom">{{ $post->title }}</h3>
                        <p class="text-gray-1000 mt-4">{{ $post->body }}</p>                            
                        <div class="flex justify-between mt-8">
                            <p class="text-gray-600">{{ $post->user->name }}</p>
                            <p class="text-gray-600">{{ $post->updated_at }}</p>
                        </div>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</x-app-layout>