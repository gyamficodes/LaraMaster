<x-layoutcomp title="All Posts">
    <x-flash-message type="success" />
    <div class="container mx-auto px-4 py-8  flex flex-col gap-3.5">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            {{ $post->title }}
                        </h3>

                        <p class="text-gray-600 mb-4 line-clamp-3">
                            {{ Str::limit($post->body, 120) }}
                        </p>

                        <div class="flex items-center justify-between pt-3 border-t border-gray-100">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                                    <span class="text-sm font-medium text-gray-600">
                                        {{ strtoupper(substr($post->name, 0, 1)) }}
                                    </span>
                                </div>
                                <span class="text-sm text-gray-600">
                                    {{ $post->name }}
                                </span>
                            </div>
                            <span class="text-sm text-gray-500">
                                {{ $post->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </div>
</x-layoutcomp>