@extends('layouts.landing')
@section('hero-content')
    <div class="banner__content flex justify-center">
        <div class="bg-black/75 text-white p-12 backdrop-blur-sm rounded-lg shadow-lg w-30 md:w-1/3 scale-125">
            <h2 class="text-3xl font-bold mb-6 text-left">Sign In</h2>
            <form action="{{ route('login.attempt') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="w-full outline-none p-3 mt-1 text-white rounded-lg bg-neutral-900 hover:bg-neutral-800">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="w-full outline-none p-3 mt-1 text-white rounded-lg bg-neutral-900 hover:bg-neutral-800">
                </div>
                <button type="submit"
                    class="w-full transition bg-red-700 hover:bg-red-800 text-white font-bold py-3 px-4 mt-5 rounded-lg">Login</button>
                <div class="flex justify-between flex-wrap md:flex-wrap">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember-me" class="mr-2">
                        <label for="remember-me" class="text-sm">Remember Me</label>
                    </div>
                    <div>
                        <a href="#" class="hover:underline">Need help?</a>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <p class="text-sm">Don't have an account? <a href="{{ route('register.index') }}"
                            class="font-bold hover:underline">Sign up</a></p>
                </div>
            </form>
        </div>

    </div>
@endsection
