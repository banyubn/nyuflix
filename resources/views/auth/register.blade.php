@extends('layouts.landing')
@section('hero-content')
    <div class="banner__content flex justify-center">
        <div class="bg-black/75 text-white p-12 backdrop-blur-sm rounded-lg shadow-lg w-30 md:w-1/3 scale-125">
            <h2 class="text-3xl font-bold mb-6 text-left">Register</h2>
            <form action="{{ route('register.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="w-full p-3 mt-1 text-white rounded-lg bg-neutral-900 hover:bg-neutral-800">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="w-full p-3 mt-1 text-white rounded-lg bg-neutral-900 hover:bg-neutral-800"
                        oninput="passwordValidate()">
                </div>
                <div>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation"
                        class="w-full p-3 mt-1 text-white rounded-lg bg-neutral-900 hover:bg-neutral-800"
                        oninput="passwordValidate()">
                </div>

                <div id="confirmation_validation" class="validation hidden">
                </div>

                <button type="submit"
                    class="w-full transition bg-red-700 hover:bg-red-800 text-white font-bold py-3 px-4 mt-5 rounded-lg">Create
                    Account</button>
                <div class="flex justify-right flex-wrap md:flex-wrap">
                    <div>
                        <a href="#" class="hover:underline">Need help?</a>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <p class="text-sm">Already have an account? <a href="{{ route('login.index') }}"
                            class="font-bold hover:underline">Sign In</a></p>
                </div>
            </form>
        </div>

    </div>
@endsection
@push('script')
    <script>
        const password = document.querySelector('#password');
        const passwordConfirmation = document.querySelector('#password_confirmation');

        function passwordValidate() {
            if (password.value.length < 6) {
                document.querySelector('#confirmation_validation').classList.remove('hidden');
                document.querySelector('#confirmation_validation').innerHTML =
                    '<p class="text-left text-danger">* Password must be at least 6 characters</p>';
            } else {
                if (password.value !== passwordConfirmation.value) {
                    document.querySelector('#confirmation_validation').classList.remove('hidden');
                    document.querySelector('#confirmation_validation').innerHTML =
                        '<p class="text-left text-danger">* Password does not match</p>';
                } else {
                    document.querySelector('#confirmation_validation').classList.add('hidden');
                }
            }


        }
    </script>
@endpush
