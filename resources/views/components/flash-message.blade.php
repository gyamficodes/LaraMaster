
@php
    $types = ['success', 'error', 'warning', 'info'];
@endphp

@foreach ($types as $type)
    @if (session($type))
        <div id="flash-message-{{ $type }}"
             class="flash-message fixed top-5 right-5 z-50 w-[300px] px-4 py-3 rounded shadow-lg text-white
                    {{ $type == 'success' ? 'bg-green-500' : '' }}
                    {{ $type == 'error' ? 'bg-red-500' : '' }}
                    {{ $type == 'warning' ? 'bg-yellow-500 text-black' : '' }}
                    {{ $type == 'info' ? 'bg-blue-500' : '' }}
                    translate-x-full opacity-0 transition duration-500 ease-out">
            <strong class="font-bold">{{ ucfirst($type) }}:</strong>
            <span class="ml-1">{{ session($type) }}</span>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const flash = document.getElementById('flash-message-{{ $type }}');

                if (flash) {
                    // Slide in
                    setTimeout(() => {
                        flash.classList.remove('translate-x-full', 'opacity-0');
                        flash.classList.add('translate-x-0', 'opacity-100');
                    }, 100);

                    // Slide out after delay
                    setTimeout(() => {
                        flash.classList.remove('translate-x-0', 'opacity-100');
                        flash.classList.add('translate-x-full', 'opacity-0');
                    }, 5000);

                    // Remove from DOM
                    setTimeout(() => {
                        flash.remove();
                    }, 6000);
                }
            });
        </script>
    @endif
@endforeach
