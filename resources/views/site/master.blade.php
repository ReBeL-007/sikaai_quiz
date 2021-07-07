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

