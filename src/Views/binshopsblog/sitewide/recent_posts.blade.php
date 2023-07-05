<div>
    <h1 class="text-2xl font-bold leading-5">Recent Post</h1>
    @forelse($recentPosts as $post)
        <div class="p-3 mt-2 rounded-lg shadow bg-gray-50 hover:bg-gray-100 hover:text-gray-500">
            <a href="/en/blog/{{ $post->slug }}">
                <h1 class="font-medium text-base">
                    {{ $post->title }}
                </h1>
            </a>
        </div>
    @empty
        <div class="p-5 my-5 bg-gray-100 rounded-lg">
            <h1 class="text-lg font-bold text-center text-gray-400">No recent post available</h1>
        </div>
    @endforelse
</div>
