<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <article class="py-8 max-w-screen-lg">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/author/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a> |
            {{ $post->created_at->format('j F Y') }}
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to blog</a>
    </article>
</x-layout>
