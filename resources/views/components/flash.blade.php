{{-- @if (session()->has('success'))
    <div x-data="{show: true}"
        x-init="setTimeout(() => show =false, 4000)"
        x-show="show"
        class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm "
        >
        <p>{{session('success')}}</p>
    </div>
@endif --}}


{{--Center design  --}}

{{-- @if (session()->has('success'))
    <div x-data="{show: true}"
        x-init="setTimeout(() => show =false, 4000)"
        x-show="show"
        class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl text-sm flex items-center justify-center"
        style="top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1000;">
        <p>{{ session('success') }}</p>
    </div>
@endif --}}

@if (session()->has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        });
    </script>
@endif
