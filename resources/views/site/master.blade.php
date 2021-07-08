<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('site.head')
    </head>
<body>
    <header>
        @include('site.nav')
    </header>
    <main>
        @section('content')
        @show
        <!--  -->
        <section class="section section__newsletter section__animate">
        <div class="newsLetter__content">
            <div class="newsLetter__decoration newsLetter__decoration-1">
                <svg width="128" height="128" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M49.4156 32.5079L101.66 64.3604L40.9535 93.1087L49.4156 32.5079Z" fill="#FFA451"/>
                    <path d="M34.3594 68.3743L29.9172 108.318L65.7567 93.0173" stroke="#5A60CE" stroke-width="5"/>
                </svg>
            </div>

            <div class="newsLetter__decoration newsLetter__decoration-2">
            <svg width="100" height="80" viewBox="0 0 100 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="7.38363" y="44.8716" width="51.4627" height="29.9911" transform="rotate(-26.6726 7.38363 44.8716)" stroke="#5A60CE" stroke-width="11"/>
                <path d="M85.3703 48.3158C86.7813 43.7759 87.2843 39.0025 86.8506 34.2682C86.4169 29.5339 85.055 24.9314 82.8426 20.7234C80.6301 16.5154 77.6105 12.7845 73.9562 9.74347C70.3019 6.70248 66.0843 4.41105 61.5444 3" stroke="#FFA451" stroke-width="5"/>
            </svg>

            </div>

            <div class="newsLetter__description">
            <h2 class="newsLetter__heading">Sign Up to our Newsletter</h2>
            <p>
                SignUp to our Newsletter and get many interesting updates weekly
            </p>
            </div>
            <!-- get mail input -->
            <div class="newsLetter-main__box">
            <input type="email" name="" placeholder="Type your Email Address" />
            <button class="btn-subscribe" name="">Subscribe</button>
            </div>
        </div>
        </section>
    </main>
    
        @include('site.footer')
    
</body>
</html> 

