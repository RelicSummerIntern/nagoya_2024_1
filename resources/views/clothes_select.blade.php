<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clothes') }}
            </h2>
            <div class="my-2">
                <a href="{{ route('upload') }}" class="inline-block py-2 px-4 btn btn-primary text-decoration-none">
                    {{ __('服を追加する') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <form action="{{ route('decision') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($clothes as $item)
                    <div class="bg-white shadow-sm overflow-hidden sm:rounded-lg p-3 flex flex-col justify-between max-w-xs mx-auto">
                        <img src="{{ asset($item->picture) }}" alt="" class="w-full h-auto">
                        <!-- ラジオボタン -->
                        <div class="mt-4 flex justify-center">
                            <label>
                                <input type="radio" name="selected_clothes" value="{{ json_encode($item) }}">
                                選択
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 決定ボタン -->
            <div class="max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
                <div class="my-4">
                    <button type="submit" class="inline-block py-2 px-4 btn btn-primary text-decoration-none">
                        {{ __('決定') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>