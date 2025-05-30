<x-layoutcomp title="Welcome">

    <div class="bg-gray-50">

        <!-- Hero Section -->
        <header class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Share Your Skills or Breaking News</h1>
                <p class="text-xl mb-8">Connect with professionals or stay updated with trending stories</p>
                <div class="flex justify-center gap-4">
                    <a href="#post-service"
                        class="bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-tools mr-2"></i>Post a Service
                    </a>
                    <a href="#trending"
                        class="bg-indigo-700 text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-800 transition">
                        <i class="fas fa-newspaper mr-2"></i>Browse News
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-6xl mx-auto px-4 py-12">
            <!-- Services Section -->
            <section id="services" class="mb-16">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Popular Services</h2>
                    <a href="#" class="text-indigo-600 hover:underline">View all</a>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Service Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-indigo-100 p-3 rounded-full">
                                    <i class="fas fa-code text-indigo-600 text-xl"></i>
                                </div>
                                <h3 class="ml-4 font-semibold text-lg">Web Development</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Professional website building with React/Node.js</p>
                            <div class="flex justify-between items-center">
                                <span class="text-indigo-600 font-medium">$50/hr</span>
                                <a href="#" class="text-sm text-gray-500 hover:text-indigo-600">Contact</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-pink-100 p-3 rounded-full">
                                    <i class="fas fa-paint-brush text-pink-600 text-xl"></i>
                                </div>
                                <h3 class="ml-4 font-semibold text-lg">Graphic Design</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Logo creation and brand identity packages</p>
                            <div class="flex justify-between items-center">
                                <span class="text-indigo-600 font-medium">$35/hr</span>
                                <a href="#" class="text-sm text-gray-500 hover:text-indigo-600">Contact</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="bg-green-100 p-3 rounded-full">
                                    <i class="fas fa-chart-line text-green-600 text-xl"></i>
                                </div>
                                <h3 class="ml-4 font-semibold text-lg">Digital Marketing</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Social media strategy and campaign management</p>
                            <div class="flex justify-between items-center">
                                <span class="text-indigo-600 font-medium">$45/hr</span>
                                <a href="#" class="text-sm text-gray-500 hover:text-indigo-600">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trending News Section -->
            <section id="trending">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Trending News</h2>
                    <a href="#" class="text-indigo-600 hover:underline">View all</a>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- News Article 1 -->
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="https://source.unsplash.com/random/600x400/?tech" alt="Tech news"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <span class="text-sm text-indigo-600 font-medium">Technology</span>
                            <h3 class="text-xl font-bold my-2">Ghana's Tech Ecosystem Grows 40% in 2023</h3>
                            <p class="text-gray-600 mb-4">Local startups raised record funding this year despite global
                                downturn...</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">By Kwame Mensah • 2 hours ago</span>
                                <a href="#" class="text-indigo-600 hover:underline">Read more</a>
                            </div>
                        </div>
                    </article>

                    <!-- News Article 2 -->
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="https://source.unsplash.com/random/600x400/?business" alt="Business news"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <span class="text-sm text-indigo-600 font-medium">Business</span>
                            <h3 class="text-xl font-bold my-2">New Tax Policies for Freelancers</h3>
                            <p class="text-gray-600 mb-4">GRA announces simplified filing process for independent
                                contractors...</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">By Ama Serwaa • 1 day ago</span>
                                <a href="#" class="text-indigo-600 hover:underline">Read more</a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- CTA to Post Content -->
            <section id="post-service" class="mt-20 bg-indigo-50 rounded-xl p-8 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Have Something to Share?</h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">Post your professional services or breaking news to
                    reach thousands of users</p>
                <div class="flex justify-center gap-4">
                    <a href="#"
                        class="bg-indigo-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-700 transition">
                        <i class="fas fa-plus mr-2"></i>Create Post
                    </a>
                    <a href="#"
                        class="bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition border border-indigo-600">
                        Learn How It Works
                    </a>
                </div>
            </section>
        </main>

        <!-- Footer -->

    </div>


</x-layoutcomp>