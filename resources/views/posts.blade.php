<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="mx-auto max-w-7xl px-1">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

            @foreach ($posts as $post)
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="{{ $post->created_at }}"
                            class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                        <a href="/category/{{ $post->category->slug }}"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $post->category->name }}</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="/post/{{ $post['slug'] }}">
                                <span class="absolute inset-0"></span>
                                {{ $post['title'] }}
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">{{ Str::limit($post['body'], 120) }}</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="/author/{{ $post->author->username }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $post->author->name }}
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
