<x-layoutcomp title="Create Post">


    <div class="max-w-7xl mx-auto h-full px-4 sm:px-6 lg:px-8 ">
        <div class="max-w-2xl mx-auto mt-[70px] px-4 sm:px-6 lg:px-8 py-8 bg-white rounded-xl shadow-sm">
            <!-- Header -->
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Create A Post</h2>
                <p class="mt-2 text-gray-500">Share your thoughts with the community</p>
            </div>

            <!-- Form -->
            <form method="POST" action="/posts" class="space-y-6">
                @csrf

                <!-- Name Field -->
                <div class="space-y-2">
                    <x-form-label>Full Name</x-form-label>
                    <x-form-input name="name" type="text" aria-autocomplete="name" placeholder="John Doe" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" />
                    <x-error name="name" />

                    <x-form-label>title</x-form-label>
                    <x-form-input name="title" type="text" placeholder=" Title" />
                    <x-error name="title" />
                    {{-- <p class="text-xs text-gray-500">This will be displayed publicly</p> --}}
                    <x-form-label>Post message</x-form-label>
                    <textarea name="body"
                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md w-full"></textarea>
                    <x-error name="body" />
                    {{-- <p class="text-xs text-gray-500">This will be displayed publicly</p> --}}
                </div>
                <!-- Submit Button -->
                <div class="pt-4">
                    <x-button>Create Post</x-button>

                </div>
            </form>
        </div>
    </div>


</x-layoutcomp>