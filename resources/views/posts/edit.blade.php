<x-layoutcomp title="{{ $post->title }}">
    <div class="lg:w-[60%] mx-auto px-4 py-8  flex flex-col gap-3.5">
        <form method="POST" action="/posts/{{ $post->id }}" enctype="multipart/form-data"
            class=" w-[50%] px-5 py-5 mx-auto mt-7 bg-white shadow-2xl space-y-6">
            @csrf
            @method('PATCH')
            <!-- Name Field -->
            <div class="space-y-2">

                <x-form-label>title</x-form-label>
                <x-form-input name="title" value="{{ $post->title }}" type="text" placeholder=" Title" />
                <x-error name="title" />
                {{-- <p class="text-xs text-gray-500">This will be displayed publicly</p> --}}
                <x-form-label>Post message</x-form-label>
                <textarea name="body"
                    class="flex rounded-md shadow-sm ring-1 ring-inset p-2 ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 h-[200px]  w-full">{{ old('body', $post->body) }}</textarea>
                <x-error name="body" />
                <!-- Show current image if exists -->
                @if($post->image)
                    <div class="mb-2">
                        <img src="{{ Str::startsWith($post->image, 'http') ? $post->image : asset('storage/' . $post->image) }}"
                            alt="Current Image" class="w-32 h-32 object-cover rounded mb-2 border">
                        <p class="text-xs text-gray-500">Current image</p>
                    </div>
                @endif

                <!-- File input for new image -->
                <label class="block text-sm font-medium text-gray-700">Change Image (optional)</label>
                <div class="relative flex items-center">
                    <label
                        class="cursor-pointer inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5-5 5 5M12 15V3" />
                        </svg>
                        <span id="file-label">Choose New Image</span>
                        <input type="file" name="image" class="hidden"
                            onchange="document.getElementById('file-label').innerText = this.files[0]?.name || 'Choose New Image'">
                    </label>
                </div>
                <x-error name="image" />
            </div>
            <div class=" flex items-center justify-between mt-1">
                <div>
                    <button form="delete-form" class=" text-red-500">Delete</button>
                </div>

                <div>

                    <div class=" flex items-center gap-5">
                        <a href="{{ route('post.show', $post->id) }}">Cancel</a>
                        <button type="submit">Update</button>
                    </div>


                </div>
            </div>
        </form>
    </div>


    <form id="delete-form" action="/posts/{{ $post->id }}" method="POST" onsubmit="return confirm('Are you sure')">
        @csrf
        @method('DELETE')
    </form>

</x-layoutcomp>