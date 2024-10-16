@extends('layouts.template')
@include('layouts.navbar')

@section('content')
    <div class="h-screen flex items-center justify-center flex-column gap-5">
        <div>
            <h1 class="text-5xl font-bold">Choose your Profile</h1>
        </div>
        <div>
            <div class="flex text-white justify-center rounded-lg shadow-lg gap-5">
                @foreach ($profiles as $profile)
                    <form action="{{ route('member.select-profile', $profile->id) }}" method="GET"
                        class="profile opacity-80 transition hover:opacity-100">
                        @csrf
                        <button type="submit" style="width: 15rem;">
                            <div class="transition rounded hover:outline">
                                <img src="{{ asset('storage/images/' . $profile->avatar) }}" alt=""
                                    class="aspect-square" style="width: 15em">

                                {{-- <img src="https://www.w3schools.com/w3images/avatar2.png" alt="" class="aspect-square rounded"
                                    style="width: 14em"> --}}

                            </div>
                            <p class="text-2xl mt-3 text-white/80 text-ellipsis overflow-hidden truncate">
                                {{ $profile->name }}</p>
                        </button>
                    </form>
                @endforeach
                @if($profiles->count() < 4)
                <a href="{{ route('member.profile.create') }}"
                    class="flex items-center justify-center flex-column opacity-60 transition hover:opacity-100">
                    <div>
                        <i class="fa fa-circle-plus" style="font-size: 50px;"></i>
                    </div>
                    <p class="text-2xl text-center mt-3">Add Profile</p>
                </a>
                @endif
            </div>
        </div>
        <div class="mt-5">
            <a href="{{ route('member.profile.manage') }}"
                class="text-2xl outline outline-1 outline-gray-100 transition text-gray-100 w-30 hover:bg-gray-400/30 hover:text-white py-3 px-4 mt-5">MANAGE
                PROFILES</a>
        </div>
    </div>
@endsection
