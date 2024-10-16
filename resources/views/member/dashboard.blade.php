@extends('layouts.template')

@section('content')
    <p>Hai kak <b>{{ $profile->name }}</b></p>

    @if (session('success'))
        <div id="toast-success" class="fixed bottom-4 right-4 max-w-xs bg-green-500 text-sm text-white rounded-xl shadow-lg"
            role="alert" tabindex="-1" aria-labelledby="toast-success-label">
            <div id="toast-success-label" class="flex p-4">
                {{ session('success') }}

                <button type="button" data-dismiss-target="#toast-success"
                    class="ml-auto inline-flex items-center size-5 rounded-lg text-white opacity-50 hover:opacity-100">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    @endif

    Dashboard Member njir
@endsection
