<x-layoutcomp title="Register">
<div class="min-h-screen  bg-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-gray-900">Create your account</h2>
            <p class="mt-2 text-sm text-gray-600">Join our community today</p>
        </div>
        
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden p-8">
            <form method="POST" action="/register" class="space-y-6">
                @csrf
                
                <div class="space-y-5">
                    <div>
                        <x-form-label for="name" class="block text-sm font-medium text-gray-700">Full Name</x-form-label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <x-form-input 
                                name="name" 
                                id="name" 
                                type="text" 
                                required 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                placeholder="John Doe"
                            />
                        </div>
                        <x-error name="name" class="mt-1 text-sm text-red-600" />
                    </div>

                    <div>
                        <x-form-label for="email" class="block text-sm font-medium text-gray-700">Email</x-form-label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <x-form-input 
                                name="email" 
                                id="email" 
                                type="email" 
                                required 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                placeholder="you@example.com"
                            />
                        </div>
                        <x-error name="email" class="mt-1 text-sm text-red-600" />
                    </div>

                    <div>
                        <x-form-label for="password" class="block text-sm font-medium text-gray-700">Password</x-form-label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <x-form-input 
                                name="password" 
                                id="password" 
                                type="password" 
                                required 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                placeholder="••••••••"
                            />
                        </div>
                        <x-error name="password" class="mt-1 text-sm text-red-600" />
                    </div>

                    <div>
                        <x-form-label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</x-form-label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <x-form-input 
                                name="password_confirmation" 
                                id="password_confirmation" 
                                type="password" 
                                required 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                placeholder="••••••••"
                            />
                        </div>
                        <x-error name="password_confirmation" class="mt-1 text-sm text-red-600" />
                    </div>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a href="/login" class="text-sm font-medium text-blue-600 hover:text-blue-500 transition duration-200">
                        Already have an account?
                    </a>
                    
                    <x-button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium rounded-lg shadow-sm transition duration-200 transform hover:-translate-y-0.5">
                        Register
                    </x-button>
                </div>
            </form>
        </div>
        
        <div class="mt-8 text-center text-sm text-gray-500">
            <p>By registering, you agree to our <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Terms</a> and <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Privacy Policy</a>.</p>
        </div>
    </div>
</div>
</x-layoutcomp>






