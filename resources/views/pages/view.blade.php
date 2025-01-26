@extends('welcome')
@section('content')
<!-- News right -->
<div class="grid grid-cols-1 lg:grid-cols-12 container mt-28">
    <div class="mx-auto lg:col-span-9 mx-auto">
        <div class=" px-10">
            <h2 class="text-4xl font-semibold my-2">{{ $detail['title'] }}</h2>
            <h2 class="text-xl font-semibold text-orange-500">
                {{ \Carbon\Carbon::parse($detail['pubDate'])->locale('id')->isoFormat('D MMMM YYYY') }}
            </h2>
            <img src="{{ $detail['thumbnail'] }}" alt="Blog Featured Image" class="mb-8">
            <div class="prose max-w-none">
                <p>{{ $detail['description'] }}</p>
            </div>
        </div>
    </div>
    <div class="lg:col-span-3 container mx-auto px-2 pt-8">
        <div class="max-w-lg ml-auto">
            <h1 class="text-3xl font-bold mb-4">News Feed</h1>
            @foreach ($relateds as $related)
            <div class="bg-white rounded-lg shadow-md border p-4">
                <div class="flex items-center mb-4">
                    <img class="w-12 h-12 rounded-full mr-3" src="{{ $related['thumbnail'] }}" alt="Profile Image">
                    <div>
                        <h2 class="text-lg font-semibold">{{ $related['title'] }}</h2>
                        <p class="text-gray-500 text-sm">Published on
                            {{ \Carbon\Carbon::parse($related['pubDate'])->locale('id')->isoFormat('D MMMM YYYY') }}
                        </p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">
                    {{ $related['description'] }}
                </p>
                <div class="flex justify-end">
                    <a href="/detail/{{ $related['title'] }}" class="text-blue-500 font-semibold">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end news right -->
@endsection