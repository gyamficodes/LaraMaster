<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Left side - Logo/Brand -->
                <div class="flex items-center">
                    <a href="{{ route('/') }}" class="flex-shrink-0 flex items-center">
                        <svg class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="ml-2 text-xl font-bold text-gray-900">POSTODAY</span>
                    </a>
                </div>

                <!-- Center - Navigation Links -->
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">

                </div>

                <!-- Right side - Simple buttons (no auth) -->
                <div class="hidden space-x-1 sm:ml-6 sm:flex sm:items-center">
                    <a href="{{ route('post.index') }}"
                        class="border-indigo-500 text-gray-900 inline-flex items-center  pt-1 border-b-2 text-sm font-medium">
                        Post
                    </a>
                    <a href="{{ route('post.create') }}"
                        class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 ml-3 inline-flex items-center  pt-1 border-b-2 text-sm font-medium">
                        Create Post
                    </a>
                    <a href="{{ route('about') }}"
                        class="text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium">About</a>

                    @guest
                        <a href="{{ route('auth.login') }}" class="">Login</a>
                        <a href="{{ route('auth.register') }}" class="">register</a>
                    @endguest

                    @auth
                        <div class=" relative">
                                           <img title="Personal" src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/default-image.png') }}"
     alt="{{ $user->name }}"
     class="w-[50px] h-[50px] rounded-full">
                            <div class="absolute top-0 right-0 bg-green-500 rounded-full w-3 h-3 border-2 border-white">
                            </div>
                            <div
                                class="absolute w-[300px] h-auto bg-white shadow-2xl rounded-2xl mt-2 transition-all duration-300 ease-in-out group-hover:block z-50">
                                <div class="p-6 space-y-3">
                                    <div class=" flex items-center justify-between">
                                      <div class="flex items-center space-x-4">
                                          <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/default-image.png') }}"
     alt="{{ $user->name }}"
     class="w-16 h-16 rounded-full">
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800">{{ $user->name }}</h3>
                                            <p class="text-sm text-gray-500">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                       <div>
                                        <a href="{{ route('profile.show') }}"
                                            class="">
                                           <a href="{{ route('profile.show') }}"
   class="inline-flex items-center justify-center w-10 h-10 rounded-md text-gray-600 hover:text-indigo-600 hover:bg-gray-100 transition duration-200">
    <!-- Settings Icon (Heroicons) -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M11.25 3c.414 0 .75.336.75.75v.743a8.977 8.977 0 012.51.943l.525-.526a.75.75 0 011.061 0l1.061 1.06a.75.75 0 010 1.062l-.525.525a8.978 8.978 0 01.943 2.51h.743a.75.75 0 01.75.75v1.5a.75.75 0 01-.75.75h-.743a8.978 8.978 0 01-.943 2.51l.525.525a.75.75 0 010 1.061l-1.06 1.061a.75.75 0 01-1.062 0l-.525-.525a8.977 8.977 0 01-2.51.943v.743a.75.75 0 01-.75.75h-1.5a.75.75 0 01-.75-.75v-.743a8.977 8.977 0 01-2.51-.943l-.525.525a.75.75 0 01-1.061 0l-1.061-1.06a.75.75 0 010-1.062l.525-.525a8.978 8.978 0 01-.943-2.51H3.75a.75.75 0 01-.75-.75v-1.5c0-.414.336-.75.75-.75h.743a8.978 8.978 0 01.943-2.51l-.525-.525a.75.75 0 010-1.061l1.06-1.061a.75.75 0 011.062 0l.525.525a8.977 8.977 0 012.51-.943V3.75c0-.414.336-.75.75-.75h1.5zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" />
    </svg>
</a>

                                        </a>
                                    </div>


                                    </div>
                                  
                                   

                                     <form method="POST" action="/logout">
                            @csrf
                            <x-button>Logout</x-button>
                        </form>
                                </div>
                            </div>

                        </div>
                       
                    @endauth

                    <a href="{{ route('contact') }}"
                        class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                        Contact
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="hidden sm:hidden" id="mobile-menu">
            <div class="space-y-1 pt-2 pb-3">
                <a href="{{ route('post.index') }}"
                    class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700">Home</a>
                {{-- <a href="{{ route('post.create') }}"
                    class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Create
                    Post</a> --}}
                <a href="/about"
                    class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700">About</a>
                <a href="{{  route('contact') }}"
                    class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Contact</a>
            </div>
        </div>
    </nav>


    <main>
        {{ $slot }}
    </main>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">Postoday</h3>
                    <p class="text-gray-400">The simplest way to share your skills and find professionals.</p>
                </div>
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider mb-4">Explore</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Trending Posts</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Popular Skills</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Featured Creators</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-semibold uppercase tracking-wider mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-sm text-gray-400 text-center">
                &copy; 2023 Postoday. All rights reserved.
            </div>
        </div>
    </footer>
</body>

</html>