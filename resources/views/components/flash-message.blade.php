@if (session($type))
    <div id="flash-message" class="flash-message 
            {{ $type == 'success' ? 'bg-green-500' : 'bg-red-500' }}">
        <strong class="font-bold">{{ ucfirst($type) }}!</strong>
        <span>{{ session($type) }}</span>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const flash = document.getElementById('flash-message');

            if (flash) {
                // Slide in
                flash.classList.add('show');

                // Wait 3 seconds, then slide out
                setTimeout(() => {
                    flash.classList.remove('show');
                    flash.classList.add('hide');
                }, 9000);

                // After animation, remove from DOM (optional)
                setTimeout(() => {
                    flash.remove();
                }, 4500);
            }
        });
    </script>

  
@endif