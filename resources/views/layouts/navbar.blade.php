<header class="header">
    <a class="header__logo" href="#">
        <img src="{{ asset('assets/img/NYUFLIX.png') }}"
            alt="" style="width: 15em; height: 5em" />
    </a>

    @if (!Auth::check())
        <a class="sign__in__btn primary--btn transition text-white hover:bg-red-800" href="{{ route('login.index') }}">
            Sign in </a>
    @else
        <a class="primary--btn bg-white outline outline-1 transition text-black hover:brightness-75" href="{{ route('logout') }}">
            Logout </a>
    @endif
</header>
