<x-layoutcomp title="Edit Profile">
    <x-slot:title>Edit Profile</x-slot:title>

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold mb-6">Edit Profile</h2>

            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PATCH')

                <!-- Name Field -->
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <div class="relative w-full">
                        <x-form-input name="name" type="text" value="{{ old('name', $user->name) }}"
                            placeholder="Enter your name"
                            class="w-full pl-10 pr-4 py-3 rounded-lg border-0 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-500 transition-all duration-200"
                            required />
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                   
                        <x-error name="name" />
                </div>

                <!-- Email Field -->
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="relative w-full">
                        <x-form-input name="email" type="email" value="{{ old('email', $user->email) }}"
                            placeholder="Enter your email"
                            class="w-full pl-10 pr-4 py-3 rounded-lg border-0 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-500 transition-all duration-200"
                            required />
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                    <x-error name="email" />
                </div>

                <!-- Password Field -->
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-gray-700">New Password (optional)</label>
                    <div class="relative w-full">
                        <x-form-input name="password" type="password" placeholder="Enter new password"
                            class="w-full pl-10 pr-4 py-3 rounded-lg border-0 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-500 transition-all duration-200" />
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                    </div>
                    <x-error name="password" />
                </div>

                <!-- Confirm Password Field -->
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                    <div class="relative w-full">
                        <x-form-input name="password_confirmation" type="password" placeholder="Confirm new password"
                            class="w-full pl-10 pr-4 py-3 rounded-lg border-0 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-500 transition-all duration-200" />
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Bio Field -->
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-gray-700">Bio</label>
                    <div class="relative">
                        <textarea name="bio" placeholder="Tell us about yourself..."
                            class="w-full px-4 pl-[39px] py-3 rounded-lg border-0 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-500 transition-all duration-200 min-h-[100px] max-h-[200px]">{{ old('bio', $user->bio) }}</textarea>
                        <div class="absolute inset-y-0 left-0 pl-3 pt-3 flex items-start pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                    </div>
                    <x-error name="bio" />
                </div>

                <!-- Avatar Field -->
                <div class="space-y-3">
                    <label class="block text-sm font-medium text-gray-700">Profile Picture (optional)</label>
                    <div class="relative flex items-center">
                        <label
                            class="cursor-pointer inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition-colors duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5-5 5 5M12 15V3" />
                            </svg>
                            <span id="avatar-label">Choose Image</span>
                            <input type="file" name="avatar" class="hidden"
                                onchange="document.getElementById('avatar-label').innerText = this.files[0]?.name || 'Choose Image'">
                        </label>
                    </div>
                    <x-error name="avatar" />
                </div>

                <!-- Current Avatar Preview -->
                @if($user->avatar)
                    <div class="flex items-center space-x-4">
                        <span class="text-sm font-medium text-gray-700">Current Avatar:</span>
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Current avatar"
                            class="w-12 h-12 rounded-full">
                    </div>
                @endif

                <!-- Enhanced Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-full flex justify-center items-center py-4 px-6 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300 group">
                        <span class="group-hover:scale-105 transition-transform duration-300">Update Profile</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layoutcomp>