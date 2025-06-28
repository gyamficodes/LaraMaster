
<x-layoutcomp title="Profile">
    <div class="container mx-auto px-4 py-8 flex flex-col gap-3.5">
        <div class="text-center">
            <h2 class="text-2xl font-bold mb-4">Profile</h2>
            <p class="text-gray-600">Welcome, {{ $user->name }}!</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center space-x-4 mb-4">
                <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/default-image.png') }}"
     alt="{{ $user->name }}"
     class="w-16 h-16 rounded-full">
                <div>
                    <h3 class="text-xl font-semibold">{{ $user->name }}</h3>
                    <p class="text-gray-500">{{ $user->email }}</p>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors duration-200">
                    Edit Profile
                </a>
            </div>
        </div>
    </div>

</x-layoutcomp>










