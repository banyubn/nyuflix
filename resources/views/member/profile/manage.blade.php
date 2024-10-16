@extends('layouts.template')
@include('layouts.navbar')

@section('content')
    <div class="h-screen flex items-center justify-center flex-column gap-5">
        <div>
            <h1 class="text-5xl font-bold">Manage your Profile</h1>
        </div>
        <div>
            <div class="flex text-white rounded-lg shadow-lg gap-5">

                @forelse ($profiles as $profile)
                    <div class="flex flex-column items-center">
                        <a href="{{ route('member.profile.edit', $profile->id) }}" style="width: 15rem;"
                            class="profile opacity-70 transition hover:opacity-100">
                            <div class="flex items-center justify-center">
                                <img src="{{ asset('storage/images/' . $profile->avatar) }}" alt="profile"
                                    class="aspect-square rounded opacity-50 hover:outline hover:blur-none"
                                    style="width: 14em;">
                                <div class="absolute flex items-center justify-center text-white text-5xl">
                                    <i class="fa fa-pen text-white"></i>
                                </div>
                                {{-- <img src="https://www.w3schools.com/w3images/avatar2.png" alt="" class="aspect-square rounded"
                                style="width: 14em"> --}}
                            </div>
                            <p class="text-2xl text-center mt-3 text-white/80 text-ellipsis overflow-hidden truncate">
                                {{ $profile->name }}</p>
                        </a>
                        <form action="{{ route('member.profile.delete', $profile->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="profile-delete opacity-70 mt-3 transition hover:opacity-100">
                                <div class="flex items-center justify-center text-white">
                                    {{-- <p class="text-3xl text-red-500 pr-2">Delete </p> --}}
                                    <i class="fa fa-trash text-red-500 text-3xl"></i>
                                </div>
                            </button>
                        </form>
                    </div>
                @empty
                    <p class="text-2xl italic text-center mt-3 text-white/60">(No Profile Found, You can make one first!)</p>
                @endforelse

            </div>
        </div>
        <div class="mt-5">
            <a href="{{ route('member.profile.index') }}"
                class="text-2xl outline outline-1 outline-gray-100 transition text-gray-100 w-30 hover:bg-gray-400/30 hover:text-white py-3 px-4 mt-5">BACK</a>
        </div>
    </div>
@endsection
