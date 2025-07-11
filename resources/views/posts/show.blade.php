<x-layoutcomp title="{{ $post->title }}">

    <div class="lg:w-[60%] mx-auto px-4 py-8  flex flex-col gap-3.5">
        <div class="mt-4">
            <a href="{{ route('post.index') }}" class="inline-flex items-center text-blue-600 hover:underline">
                ← Back to All Jobs
            </a>
        </div>
        <div>
            <h3
                class="text-xl text-[30px] font-semibold text-center text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">
                {{ $post->title }}
            </h3>
        </div>
        <div
            class="lg:w-[70%] mx-auto mt-2 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 group  hover:border-blue-100 ">
            <div class="overflow-hidden h-[300px]">
                <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://via.placeholder.com/500'}}"
                    class=" w-full  group-hover:scale-[1.05] transition-all duration-300 ease object-cover"
                    alt="post image">
            </div>
            <!-- Header with subtle accent -->
            <div class="px-6 pt-6 pb-2">

                <!-- Body text with gradient fade (for long content) -->
                <p
                    class="text-gray-600 mb-4  h-auto w-full bg-gradient-to-b from-gray-600 to-transparent bg-clip-text ">
                    {{ $post->body }}
                </p>
            </div>

            <!-- Footer with author + time (minimalist) -->
            <div class="px-6 py-4 bg-gray-50  rounded-b-xl flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <!-- Avatar with soft color -->
                    <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center">
                        <span class="text-sm font-medium text-blue-600">
                            {{ strtoupper(substr($post->user->name, 0, 1)) }}
                        </span>
                    </div>
                    <span class="text-sm text-gray-700">
                        {{ $post->user->name }}
                    </span>
                </div>
                <span class="text-xs text-gray-400">
                    {{ $post->created_at->diffForHumans() }}
                </span>
            </div>
        </div>
        @can('update', $post)
            <div class="mt-4 text-center px-3 py-3 w-[100px] mx-auto bg-gray-800 ">
                <a href="{{ route('post.edit', $post->id) }}" class="inline-flex items-center !text-white hover:underline">
                    Edit Post
                </a>
            </div>
        @endcan


        <div class="mt-4">
            <h3>Comments ({{ $post->comments->count() }})</h3>
            <h3 class="text-lg font-semibold mb-2">Comments</h3>
            @if ($post->comments->count())
                @foreach ($post->comments as $comment)
                    <div class="bg-gray-100 p-4 rounded-lg mb-4">
                        <p class="text-gray-700">{{ $comment->body }}</p>
                        <p class="text-sm text-gray-500 mt-2">By {{ $comment->user->name }} -
                            {{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                @endforeach
            @else
                <p class="text-gray-500">No comments yet.</p>
            @endif

            <!-- Comment Form -->
            @auth
                <form action="{{ route('comments.store', $post) }}" method="POST">
                    @csrf

                    <textarea name="body" class="form-control" rows="3" placeholder="Write a comment..."
                        required></textarea>
                    <button type="submit" class="btn btn-primary mt-2">Post Comment</button>
                </form>
            @else
                <p><a href="{{ route('login') }}">Log in</a> to leave a comment.</p>
            @endauth
                   </div>
        </div>
</x-layoutcomp>