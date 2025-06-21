<x-layoutcomp title="Welcome">
    <div class="bg-gray-50">
        <!-- Hero Section -->
        <header class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Postoday</h1>
                <p class="text-xl mb-8">Share your skills, stories, and connect with professionals</p>
                <div class="flex justify-center gap-4">
                    <a href="{{ route('post.create') }}"
                        class="bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                        Create a Post
                    </a>
                    <a href="#trending"
                        class="bg-indigo-700 text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-800 transition">
                        Browse Trending
                    </a>
                </div>
            </div>
        </header>

        <!-- Trending Posts Section -->
        <section id="trending" class="max-w-6xl mx-auto px-4 py-16">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Trending Today</h2>
                <a href="{{ route('post.index') }}" class="text-indigo-600 hover:underline">View all</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                    <a href="{{ route('post.show', $post->id) }}"
                        class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                        <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://via.placeholder.com/500' }}"
                            alt="Post image" class="w-full h-48 object-cover">
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
                                            {{ strtoupper(substr($post->user->name, 0, 1)) }}
                                        </span>
                                    </div>
                                    <span class="text-sm text-gray-600">
                                        {{ $post->user->name }}
                                    </span>
                                </div>
                                <span class="text-sm text-gray-500">
                                    {{ $post->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </a>

                @endforeach

            </div>
        </section>

        <!-- Skills Marketplace Section -->
        <section id="skills" class="bg-indigo-50 py-16">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Skills Marketplace</h2>
                    <a href="#" class="text-indigo-600 hover:underline">View all</a>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Skill Card 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6 text-center">
                            <div class="bg-indigo-100 p-4 rounded-full inline-block mb-4">
                                <i class="fas fa-laptop-code text-indigo-600 text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Web Development</h3>
                            <p class="text-gray-600 text-sm mb-4">Build your dream website with expert developers</p>
                            <a href="#" class="text-indigo-600 text-sm font-medium hover:underline">Browse
                                Developers</a>
                        </div>
                    </div>

                    <!-- Skill Card 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6 text-center">
                            <div class="bg-pink-100 p-4 rounded-full inline-block mb-4">
                                <i class="fas fa-paint-brush text-pink-600 text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Graphic Design</h3>
                            <p class="text-gray-600 text-sm mb-4">Stunning visuals for your brand</p>
                            <a href="#" class="text-indigo-600 text-sm font-medium hover:underline">Find Designers</a>
                        </div>
                    </div>

                    <!-- Skill Card 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6 text-center">
                            <div class="bg-purple-100 p-4 rounded-full inline-block mb-4">
                                <i class="fas fa-pen-fancy text-purple-600 text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Content Writing</h3>
                            <p class="text-gray-600 text-sm mb-4">Engaging content for your audience</p>
                            <a href="#" class="text-indigo-600 text-sm font-medium hover:underline">Hire Writers</a>
                        </div>
                    </div>

                    <!-- Skill Card 4 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6 text-center">
                            <div class="bg-green-100 p-4 rounded-full inline-block mb-4">
                                <i class="fas fa-chart-line text-green-600 text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Digital Marketing</h3>
                            <p class="text-gray-600 text-sm mb-4">Grow your business online</p>
                            <a href="#" class="text-indigo-600 text-sm font-medium hover:underline">Find Marketers</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layoutcomp>