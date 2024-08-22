<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('画像決定') }}
            <link rel="stylesheet" href="/css/decision_box.css">
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
    <img src = "{{asset('img/test.jpg')}}" width = 300 class = "decision_img";>
        <div class="my-4">
            <a href="{{ route('post.recommend') }}" class="decision_box">
                <font color = "000000" size = 5;>{{ __('検索') }}</font>
            </a>

            <a href="{{ route('post.select') }}" class="decision_box">
                <font color = "000000" size = 5;>{{ __('選びなおす') }}</font>
            </link>
            </a>
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