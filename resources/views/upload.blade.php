<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Image Upload') }}
            </h2>
            <div class="my-2">
                <a href="{{ route('postc') }}" class="inline-block py-2 px-4 btn btn-primary text-decoration-none">
                    {{ __('服選択画面に戻る') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        @if (session('success'))
            <div class="bg-green-500 text-black p-4 rounded">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="bg-red-500 text-black p-4 rounded">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('upload.submit') }}" method="POST" enctype="multipart/form-data" class="mt-6">
            @csrf
            <div class="flex flex-col space-y-4">
                <label for="image" class="block text-gray-700">Choose an image:</label>
                <input type="file" id="image" name="image" accept="image/*" class="border border-gray-300 rounded p-2">
                <button type="submit" class="bg-blue-500 text-black p-2 rounded hover:bg-blue-600">Upload Image</button>
            </div>
        </form>
    </div>
</x-app-layout>
