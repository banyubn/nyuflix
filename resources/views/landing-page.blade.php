@extends('layouts.landing')
@section('hero-content')
    <div class="banner__content">
        <h1 class="banner__title">Unlimited movies, TV shows, and more.</h1>
        <h2 class="banner__subtitle">Watch anywhere. Cancel anytime.</h2>

        <h4 class="form__cta">
            Ready to watch? Enter your email to create or restart your membership.
        </h4>

        <form class="membership__form">
            <div class="membership__input__container">
                <input class="membership__input" type="email" />
                <label class="membership__placeholder" for="email">Email</label>
            </div>
            <label class="membership__input__message"> </label>

            <button class="membership__btn primary--btn" type="submit">
                Get started
            </button>
        </form>
    </div>
@endsection
