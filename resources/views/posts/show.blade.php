<!-- filepath: d:\MyDocument\Lesson\LaraMaster\resources\views\posts\show.blade.php -->
<x-layoutcomp title="{{ $post->title }}">

    <div class="lg:w-[60%] mx-auto px-4 py-8 flex flex-col gap-3.5">
        <div class="mt-4">
            <a href="{{ route('post.index') }}" class="inline-flex items-center text-blue-600 hover:underline">
                ← Back to All Jobs
            </a>
        </div>
        <div>
            <h3 class="text-xl text-[30px] font-semibold text-center text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">
                {{ $post->title }}
            </h3>
        </div>
        <div class="lg:w-[70%] mx-auto mt-2 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 group hover:border-blue-100 ">
            <div class="overflow-hidden h-[300px]">
                <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://via.placeholder.com/500'}}"
                    class="w-full group-hover:scale-[1.05] transition-all duration-300 ease object-cover"
                    alt="post image">
            </div>
            <div class="px-6 pt-6 pb-2">
                <p class="text-gray-600 mb-4 h-auto w-full bg-gradient-to-b from-gray-600 to-transparent bg-clip-text ">
                    {{ $post->body }}
                </p>
            </div>
            <div class="px-6 py-4 bg-gray-50 rounded-b-xl flex items-center justify-between">
                <div class="flex items-center space-x-2">
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

        <div class="mt-8">
            <h3 class="text-2xl font-bold mb-4 text-gray-800">Comments ({{ $post->comments->count() }})</h3>
            @if ($post->comments->count())
                <div class="space-y-4">
                    @foreach ($post->comments as $comment)
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 relative group transition hover:shadow">
                            <div class="flex items-center mb-2">
                                <div class="w-9 h-9 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                                    <span class="text-base font-semibold text-indigo-600">
                                        {{ strtoupper(substr($comment->user->name, 0, 1)) }}
                                    </span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-800">{{ $comment->user->name }}</span>
                                    <span class="text-xs text-gray-400 ml-2">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                                @can('delete', $comment)
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="ml-auto">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 text-xs font-semibold px-2 py-1 rounded transition">
                                            Delete
                                        </button>
                                    </form>
                                @endcan
                            </div>
                            <p class="text-gray-700 pl-12">{{ $comment->body }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">No comments yet.</p>
            @endif

            <!-- Comment Form -->
            @auth
                <div class="mt-8 bg-white border border-gray-200 rounded-xl shadow p-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Add a Comment</h4>
                    <form action="{{ route('comments.store', $post) }}" method="POST" class="space-y-4">
                        @csrf
                        <textarea name="body"
                            class="w-full rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 p-3 text-gray-800 resize-none"
                            rows="3" placeholder="Write your comment..." required></textarea>
                        <x-error name="body" />
                        <div class="flex justify-end">
                            <button type="submit"
                                class="inline-flex items-center px-5 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                                Post Comment
                            </button>
                        </div>
                    </form>
                </div>
            @else
                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:underline font-medium">Log in</a>
                    <span class="text-gray-500">to leave a comment.</span>
                </div>
            @endauth
        </div>
    </div>
</x-layoutcomp>
