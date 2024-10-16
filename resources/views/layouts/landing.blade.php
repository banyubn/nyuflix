   @extends('layouts.template')
   @section('content')
       @include('layouts.navbar')

       <section class="banner__section">
           <img class="banner" src="https://raw.githubusercontent.com/thatanjan/netflix-clone-yt/youtube/media//banner.jpg"
               alt="" />
           <div class="banner__overlay"></div>

           @yield('hero-content')
       </section>


       <div class="story__card__container">
           <hr class="section__divider" />
           <section class="story__card">
               <div class="story__card__left">
                   <h1 class="fw-bold">Enjoy on your TV.</h1>

                   <h2>
                       Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray
                       players, and more.
                   </h2>
               </div>

               <div class="story__card__right">
                   <div class="tv__anime__container">
                       <img class="tv__img"
                           src="https://raw.githubusercontent.com/thatanjan/netflix-clone-yt/youtube/media/tv.png"
                           alt="" />

                       <video autoplay muted loop class="tv__anime"
                           src="https://raw.githubusercontent.com/thatanjan/netflix-clone-yt/youtube/media/tv_animation.m4v"></video>
                   </div>
               </div>
           </section>

           <hr class="section__divider" />

           <section class="story__card">
               <div class="story__card__left">
                   <h1 class="fw-bold">Download your shows to watch offline.</h1>

                   <h2>Save your favorites easily and always have something to watch.</h2>
               </div>

               <div class="story__card__right">
                   <div class="download__container">
                       <img src="https://raw.githubusercontent.com/thatanjan/netflix-clone-yt/youtube/media/mobile.jpg"
                           alt="" />

                       <div class="download__animation__container">
                           <img class="poster"
                               src="https://raw.githubusercontent.com/thatanjan/netflix-clone-yt/youtube/media/boxshot.png"
                               alt="" />

                           <div class="text__container">
                               <p class="title">Stranger Things</p>
                               <p class="downloading">Downloading...</p>
                           </div>

                           <img src="https://raw.githubusercontent.com/thatanjan/netflix-clone-yt/youtube/media/download-icon.gif"
                               class="download__gif" alt="" />
                       </div>
                   </div>
               </div>
           </section>

           <hr class="section__divider" />

           <section class="story__card">
               <div class="story__card__left">
                   <h1 class="fw-bold">Watch anywhere. Cancel anytime.</h1>
                   <h2>
                       Stream unlimited movies and TV shows on your phone, tablet, laptop, and
                       TV.
                   </h2>
               </div>
           </section>

           <hr class="section__divider" />

           <section class="story__card">
               <div class="story__card__left">
                   <h1 class="fw-bold">Create profiles for kids.</h1>
                   <h2>
                       Send kids on adventures with their favorite characters in a space made
                       just for them—free with your membership.
                   </h2>
               </div>

               <div class="story__card__right">
                   <img class="kids__image"
                       src="https://raw.githubusercontent.com/thatanjan/netflix-clone-yt/youtube/media/kids.png"
                       alt="" />
               </div>
           </section>

           <hr class="section__divider" />
       </div>

       <section class="faq">
           <h2 class="faq__title">Frequently Asked Questions</h2>

           <ul class="accordion__list">
               <li class="accordion">
                   <button class="accordion__question">
                       Consectetur ipsum error eaque ipsa?
                   </button>

                   <p class="accordion__answer">
                       Elit possimus error sunt aperiam quibusdam? Numquam similique quia eum.
                   </p>
               </li>

               <li class="accordion">
                   <button class="accordion__question">
                       Consectetur ipsum error eaque ipsa?
                   </button>

                   <p class="accordion__answer">
                       Elit possimus error sunt aperiam quibusdam? Numquam similique quia eum.
                   </p>
               </li>
           </ul>
       </section>

       <hr class="section__divider" />

       <footer class="footer">
           <a class="footer__link contact--link" href="#"> Questions? Contact Us. </a>

           <div class="footer__link__container">
               <a class="footer__link" href="#">FAQ</a>
               <a class="footer__link" href="#">Help Center</a>
               <a class="footer__link" href="#">Media Center</a>
               <a class="footer__link" href="#">Ways to Watch</a>
               <a class="footer__link" href="#">Speed Test</a>
               <a class="footer__link" href="#">Investor Relations</a>
               <a class="footer__link" href="#">Terms of Use</a>
               <a class="footer__link" href="#">Corporate Information</a>
               <a class="footer__link" href="#">Legal Notices</a>
               <a class="footer__link" href="#">Account</a>
               <a class="footer__link" href="#">jobs</a>
               <a class="footer__link" href="#">privacy</a>
               <a class="footer__link" href="#">contact us</a>
               <a class="footer__link" href="#">only on netflix</a>
               <a class="footer__link" href="#">Cookie Preferences</a>
           </div>
       </footer>

       {{-- <script src="{{ asset('js/landing-page.js') }}"></script> --}}
   @endsection
