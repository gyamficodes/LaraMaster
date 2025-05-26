<x-layoutcomp title="Create Post">


   <div class="max-w-2xl mx-auto mt-[70px] px-4 sm:px-6 lg:px-8 py-8 bg-gradient-to-br from-white to-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
    <!-- Header -->
    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800 bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-500">
            Create A Post
        </h2>
        <p class="mt-2 text-gray-500 font-medium">Share your thoughts with the community</p>
    </div>

    <!-- Form -->
    <form method="POST" action="/posts" class="space-y-8">
        @csrf
        <!-- Title Field -->
        <div class="space-y-3">
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <div class="relative w-full">
                <x-form-input 
                    name="title" 
                    type="text" 
                    placeholder="Enter a title" 
                    class="w-full pl-10 pr-4 py-3 rounded-lg border-0 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-500 transition-all duration-200"
                />
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </div>
            </div>
            <x-error name="title" />
        </div>
        <!-- Body Field -->
        <div class="space-y-3">
            <label class="block text-sm font-medium text-gray-700">Post Message</label>
            <div class="relative">
                <textarea 
                    name="body" 
                    placeholder="Write your message here..." 
                    class="w-full px-4 pl-[39px] py-3 rounded-lg border-0   shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-500 transition-all duration-200 min-h-[150px] max-h-[300px]"
                ></textarea>
                <div class="absolute inset-y-0 left-0 pl-3 pt-3 flex items-start pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
            </div>
            <x-error name="body" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <x-button class="w-full flex justify-center items-center py-3 px-6 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create Post
            </x-button>
        </div>
    </form>
</div>

</x-layoutcomp>