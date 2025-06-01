<x-layoutcomp title="Welcome">

    <div class="bg-gray-50">

        <!-- Hero Section -->
        <header class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-20">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Postoday</h1>
                <p class="text-xl mb-8">Your space to share skills, stories, and discover people you can hire</p>
                <div class="flex justify-center gap-4">
                    <a href="#post"
                        class="bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                        Post a Skill or News
                    </a>
                    <a href="#hire"
                        class="bg-indigo-700 text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-800 transition">
                        Hire Someone Today
                    </a>
                </div>
            </div>
        </header>

        <!-- About Postoday -->
        <section class="max-w-4xl mx-auto px-4 py-16 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">What is Postoday?</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
                Postoday is a simple blog-inspired platform that allows users to <span
                    class="text-indigo-600 font-semibold">share their skills</span>,
                <span class="text-indigo-600 font-semibold">break the news</span>, or <span
                    class="text-indigo-600 font-semibold">hire professionals</span> directly.
                Whether you’re a developer offering services, a writer sharing insights, or someone looking to get work
                done — Postoday connects you with the right people.
            </p>
        </section>

        <!-- Hiring Section -->
        <section id="hire" class="bg-indigo-50 py-16">
            <div class="max-w-5xl mx-auto px-4 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Need Help with a Project?</h2>
                <p class="text-gray-700 mb-6 text-lg">Explore user profiles and instantly connect with skilled people
                    offering services.</p>
                <a href="#"
                    class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-700 transition">
                    Browse and Hire
                </a>
            </div>
        </section>

        <!-- Share Section -->
        <section id="post" class="py-16 text-center">
            <div class="max-w-5xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Got Something to Offer?</h2>
                <p class="text-gray-700 mb-6 text-lg">
                    Whether it’s your latest design work, an article about the tech world, or a freelance gig — Postoday
                    is where your content meets the right audience.
                </p>
                <a href="#"
                    class="inline-block bg-white text-indigo-600 border border-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                    Start Posting Now
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-center text-sm text-gray-500 py-6">
            &copy; 2025 Postoday. Made for creators, freelancers, and thinkers.
        </footer>

    </div>



</x-layoutcomp>