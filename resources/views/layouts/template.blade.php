<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/landing-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/member.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <title>Nyuflix</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black">
    <div class="relative z-50">

        {{-- Validation Error Toast --}}
        @if ($errors->any())
            <div id="toast"
                class="toast-slide-in fixed bottom-8 right-5 max-w-lg bg-red-500 text-xl text-white rounded-xl shadow-lg"
                role="alert" tabindex="-1" aria-labelledby="toast-error-label">
                <div id="toast-error-label" class="flex p-8">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <button type="button" data-dismiss-target="#toast"
                        class="ml-auto inline-flex items-center size-5 rounded-lg text-white opacity-50 hover:opacity-100">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <!-- Success Toast -->
        @if (session('success'))
            <div id="toast"
                class="toast-slide-in fixed bottom-8 right-5 max-w-lg bg-green-500 text-xl text-white rounded-xl shadow-lg"
                role="alert" tabindex="-1" aria-labelledby="toast-success-label">
                <div id="toast-success-label" class="flex p-8">
                    {{ session('success') }}

                    <button type="button" data-dismiss-target="#toast"
                        class="ml-auto inline-flex items-center size-5 rounded-lg text-white opacity-50 hover:opacity-100">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <!-- Warning Toast -->
        @if (session('warning'))
            <div id="toast"
                class="toast-slide-in fixed bottom-8 right-5 max-w-lg bg-yellow-500 text-xl text-white rounded-xl shadow-lg"
                role="alert" tabindex="-1" aria-labelledby="toast-warning-label">
                <div id="toast-warning-label" class="flex p-8">
                    {{ session('warning') }}

                    <button type="button" data-dismiss-target="#toast"
                        class="ml-auto inline-flex items-center size-5 rounded-lg text-white opacity-50 hover:opacity-100">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <!-- Error Toast -->
        @if (session('error'))
            <div id="toast"
                class="toast-slide-in fixed bottom-8 right-5 max-w-lg bg-red-500 text-xl text-white rounded-xl shadow-lg"
                role="alert" tabindex="-1" aria-labelledby="toast-error-label">
                <div id="toast-error-label" class="flex p-8">
                    {{ session('error') }}

                    <button type="button" data-dismiss-target="#toast"
                        class="ml-auto inline-flex items-center size-5 rounded-lg text-white opacity-50 hover:opacity-100">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <!-- Info Toast -->
        @if (session('info'))
            <div id="toast"
                class="toast-slide-in fixed bottom-8 right-5 max-w-lg bg-blue-500 text-xl text-white rounded-xl shadow-lg"
                role="alert" tabindex="-1" aria-labelledby="toast-info-label">
                <div id="toast-info-label" class="flex p-8">
                    {{ session('info') }}

                    <button type="button" data-dismiss-target="#toast"
                        class="ml-auto inline-flex items-center size-5 rounded-lg text-white opacity-50 hover:opacity-100">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif
    </div>

    @yield('content')

    @stack('script')
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (document.getElementById('toast')) {
                setTimeout(function() {
                    document.getElementById('toast').classList.remove('toast-slide-in');
                    document.getElementById('toast').classList.add('toast-slide-out');
                }, 3000);

                document.querySelectorAll('[data-dismiss-target]').forEach(function(button) {
                    button.addEventListener('click', function() {
                        const target = document.querySelector(button.getAttribute(
                            'data-dismiss-target'));

                        if (target) {
                            target.classList.remove('toast-slide-in');
                            target.classList.add('opacity-0', 'transition-opacity', 'duration-150');
                            setTimeout(() => {
                                target.remove();
                            }, 200);
                        }
                    });
                });
            }
        });
    </script>
</body>

</html>
