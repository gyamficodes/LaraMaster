<x-layoutcomp title="{{ $post->title }}">
    <div class="lg:w-[60%] mx-auto px-4 py-8  flex flex-col gap-3.5">
        <form method="POST" action="/posts/{{ $post->id }}" class=" w-[50%] px-5 py-5 mx-auto mt-7 bg-white shadow-2xl space-y-6">
            @csrf
            @method('PATCH')
            <!-- Name Field -->
            <div class="space-y-2">
                <x-form-label>Full Name</x-form-label>
                <x-form-input name="name" value="{{ $post->name }}" type="text" aria-autocomplete="name"
                    placeholder="John Doe" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" />
                <x-error name="name" />
    
                <x-form-label>title</x-form-label>
                <x-form-input name="title" value="{{ $post->title }}" type="text" placeholder=" Title" />
                <x-error name="title" />
                {{-- <p class="text-xs text-gray-500">This will be displayed publicly</p> --}}
                <x-form-label>Post message</x-form-label>
                <textarea name="body"
                    class="flex rounded-md shadow-sm ring-1 ring-inset p-2 ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md w-full">{{ old('body', $post->body) }}</textarea>
                <x-error name="body" />
                {{-- <p class="text-xs text-gray-500">This will be displayed publicly</p> --}}

            </div>
            <div class=" flex items-center justify-between mt-1">
                <div>
                    <button form="delete-form" class=" text-red-500">Delete</button>
                </div>
               
                <div>
                    <div class=" flex items-center gap-5">
                        <a  href="{{ route('post.show' , $post->id) }}">Cancel</a>
                        <button  type="submit">Update</button>
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

