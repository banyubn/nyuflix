@extends('layouts.template')
@include('layouts.navbar')

@section('content')
    <div class="h-screen flex items-center justify-center flex-column gap-5">
        <div>
            <div class="text-left mb-5">
                <h1 class="text-7xl">Add Profile</h1>
                <p class="text-3xl text-secondary">Add a profile for another person watching Nyuflix.</p>
            </div>
            {{ $errors }}
            <form action="{{ route('member.profile.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center justify-center gap-4">
                    <div class="px-4 py-6">
                        {{-- input with image preview --}}
                        {{-- <div id="image-preview"
                            class="max-w-sm p-6 py-12 mb-4 bg-gray-600 h-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer transition hover:opacity-80">
                            <input id="upload" type="file" name="avatar" class="hidden" accept="image/*" />
                            <label for="upload" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-700 mx-auto mb-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-200">Upload picture</h5>
                                <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                            </label>
                        </div> --}}

                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" name="avatar" type="file">
                    </div>
                    <input type="text" name="name" id="name" placeholder="Name"
                        class="w-full p-3 mt-1 outline-none text-gray-100 w-96 bg-gray-500/80 hover:bg-gray-500" required>
                </div>
                <div class="text-left mb-5">
                    <button type="submit"
                        class=" text-2xl outline outline-1 transition text-black bg-white w-25 hover:invert hover:text-white font-bold py-3 px-4 mt-5 mr-4" {{ $profiles_count >= 4 ? 'disabled' : '' }}>Continue</button>
                        @if ($profiles_count >= 4)
                            <p></p>
                        @endif
                    <a href="{{ route('member.profile.index') }}"
                        class="text-2xl outline outline-1 outline-gray-400 transition text-gray-400 w-30 hover:bg-gray-400/20 hover:text-white py-3 px-4 mt-5">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const uploadInput = document.getElementById('upload');
        const filenameLabel = document.getElementById('filename');
        const imagePreview = document.getElementById('image-preview');

        let isEventListenerAdded = false;

        uploadInput.addEventListener('change', (event) => {
            const file = event.target.files[0];

            if (file) {
                filenameLabel.textContent = file.name;

                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.innerHTML =
                        `<img src="${e.target.result}" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />`;
                    imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400');

                    if (!isEventListenerAdded) {
                        imagePreview.addEventListener('click', () => {
                            uploadInput.click();
                        });

                        isEventListenerAdded = true;
                    }
                };
                reader.readAsDataURL(file);
            } else {
                filenameLabel.textContent = '';
                imagePreview.innerHTML =
                    `<div class="bg-gray-200 h-48 rounded-lg flex items-center justify-center text-gray-500">No image preview</div>`;
                imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');

                // Remove the event listener when there's no image
                imagePreview.removeEventListener('click', () => {
                    uploadInput.click();
                });

                isEventListenerAdded = false;
            }
        });

        uploadInput.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    </script>
@endsection
