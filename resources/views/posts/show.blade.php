<x-layoutcomp title="{{ $post->title }}">

    <div class="lg:w-[60%] mx-auto px-4 py-8  flex flex-col gap-3.5">
        <div class="mt-4">
            <a href="{{ route('post.index') }}" class="inline-flex items-center text-blue-600 hover:underline">
                ← Back to All Jobs
            </a>
        </div>

        <div
            class="lg:w-[40%] mx-auto mt-5 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 hover:border-blue-100">
            <!-- Header with subtle accent -->
            <div class="px-6 pt-6 pb-2">
                <h3 class="text-xl font-semibold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                    {{ $post->title }}
                </h3>
                <!-- Body text with gradient fade (for long content) -->
                <p class="text-gray-600 mb-4 line-clamp-3 bg-gradient-to-b from-gray-600 to-transparent bg-clip-text ">
                    {{ Str::limit($post->body, 120) }}
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
        <div  class="mt-4 text-center px-3 py-3 w-[100px] mx-auto bg-gray-800 ">
            <a href="{{ route('post.edit' , $post->id) }}" class="inline-flex items-center !text-white hover:underline">
             Edit Post
            </a>
        </div>
    </div>


 
    

</x-layoutcomp>