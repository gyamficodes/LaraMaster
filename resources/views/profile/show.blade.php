<x-layoutcomp title="Profile">
    <div class="container mx-auto px-4 py-8 max-w-2xl"> {{-- Added max-w-2xl for better centering on large screens --}}
        
        {{-- Section Title --}}
        <div class="text-center mb-8">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-2">Your Profile</h2>
            <p class="text-gray-600 text-lg">Manage your personal details and preferences.</p>
        </div>

        {{-- Profile Card --}}
        <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-300 hover:scale-[1.005] hover:shadow-xl"> {{-- Enhanced shadow and hover effect --}}
            
            {{-- User Info Header --}}
            <div class="flex items-center space-x-6 mb-6 pb-6 border-b border-gray-200"> {{-- Increased spacing and added bottom border --}}
                <div class="relative">
                    <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/default-image.png') }}"
                         alt="{{ $user->name }}"
                         class="w-24 h-24 rounded-full object-cover border-4 border-blue-500 shadow-md"> {{-- Larger avatar, subtle border and shadow --}}
                    {{-- Optional: Online status indicator --}}
                    {{-- <span class="absolute bottom-0 right-0 w-5 h-5 bg-green-500 rounded-full border-2 border-white"></span> --}}
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-gray-900">{{ $user->name }}</h3> {{-- Larger, bolder name --}}
                    <p class="text-blue-600 text-lg font-medium">{{ $user->email }}</p> {{-- Styled email --}}
                </div>
            </div>

            {{-- Bio Section --}}
            <div class="mb-6"> {{-- Added margin bottom --}}
                <h4 class="text-xl font-semibold text-gray-700 mb-2">About Me</h4>
                @if($user->bio) {{-- Check if bio exists before displaying --}}
                    <p class="text-gray-700 leading-relaxed">
                        {{ $user->bio }}
                    </p>
                @else
                    <p class="text-gray-500 italic">No bio available yet. You can add one by editing your profile!</p>
                @endif
            </div>

            {{-- General Information (Optional: you can add more fields here) --}}
            {{--
            <div class="mb-6">
                <h4 class="text-xl font-semibold text-gray-700 mb-2">Contact Information</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <p class="text-gray-700"><span class="font-medium text-gray-600">Phone:</span> +233 24 123 4567</p>
                    <p class="text-gray-700"><span class="font-medium text-gray-600">Location:</span> Accra, Ghana</p>
                </div>
            </div>
            --}}

            {{-- Edit Profile Button --}}
            <div class="mt-6 flex justify-end"> {{-- Aligned button to the right --}}
                <a href="{{ route('profile.edit') }}" 
                   class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 transition-all duration-200 text-lg"> {{-- Larger button, more padding, better focus state --}}
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.536L15.232 5.232z"></path></svg>
                    Edit Profile
                </a>
            </div>
        </div>
    </div>
</x-layoutcomp>





