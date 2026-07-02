<x-layout :title="$title">
    @foreach ($posts as $post)  
    <article class="py-8 border-b border-gray-300 max-w-screen-md">
        <a href="/posts/{{ $post['id'] }}">
        <h2 class="hover:underline mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-green-500">
            <a href="#">{{ $post['author'] }}</a> | 1 January 20
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'],250) }}</p>
        <a href="/posts/{{ $post['id'] }}" class="font-semibold text-violet-500 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach

</x-layout>
