@extends('site.master')
@section('title','Contact')

@section('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/contactUs.css')}}" />
@endsection

@section('content')
<section class="contact-bg">
    <div class="contact-background">
        <img
            style="width: 100%"
            src="{{ asset('frontend/img/contact-us-bg.png')}}"
            alt="background image"
        />
        <div class="chat-with-sikaai">
            <span class="chat-head">Chat with SIKAAI</span>
            <p class="chat-para">
                Welcome to Online Support! We are available <br />
                everyday(6AM - 10PM) to assist you.
            </p>
            <br />
            <br class="break" />
            <a class="login-messenger" href="#"
                ><i class="fab fa-facebook-messenger"></i> Log into Messenger</a
            >
        </div>
            <svg
                id="svg-messenger"
                width="89"
                height="89"
                viewBox="0 0 89 89"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
            <circle cx="44.5" cy="44.5" r="44.5" fill="#FFA451" />
            <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M47.6198 50.8407L40.4009 43.3399L26.4932 51.0297L41.7375 34.8549L48.9564 42.3557L62.8584 34.6659L47.6169 50.8407H47.6198ZM44.6786 15.8376C29.2624 15.8376 16.7646 27.5232 16.7646 41.9412C16.7646 50.1414 20.8084 57.459 27.1362 62.2443V72.2352L36.6617 66.9507C39.1996 67.6613 41.8926 68.0448 44.6786 68.0448C60.0977 68.0448 72.5954 56.3564 72.5954 41.9412C72.5954 27.5232 60.0977 15.8376 44.6786 15.8376Z"
                fill="white"
                />
            </svg>
    </div>
    <div class="contact-us">
        <div class="contact-us-left">
        <span class="contact-us-title">CONTACT US</span>
        <div class="sikaai-dot-com">
            <span class="sikaai-dot-com-title">Sikaai.com</span>
            <p class="sikaai-dot-com-para">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rutrum
            malesuada sit duis ultrices diam aliquet nisl non. Nisl
            fringilla metus, ullamcorper urna, consectetur purus imperdiet.
            </p>
        </div>

        <div class="info">
            <i class="fas fa-envelope"></i> <span>info@sikaai.com</span>
        </div>

        <div class="contact-us-left-address">
            <span class="address-title">ADDRESS</span>
            <p class="address-para">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rutrum
            malesuada sit duis ultrices diam aliquet nisl non. Nisl
            fringilla metus, ullamcorper urna, consectetur purus imperdiet.
            </p>
        </div>

        <div class="phone">
            <span class="phone-title">Phone Number</span>

            <div class="phone-details">
            <div class="phone-icon">
                <span><i class="fas fa-phone-alt"></i></span>
            </div>

            <div class="phone-content">
                <span class="phone-no"
                >+977 0123 456 789,<br />+977 0123 456 789</span
                >
            </div>
            </div>
        </div>

        <p class="any-ques">
            Any questions or remarks? Just write us a message!
        </p>
        <p class="fill-form">
            Fill up the form and our team will get back to you within <br />
            24 hours.
        </p>
        </div>

        <div class="contact-us-right">
        <h2>Give your Feedback</h2>
        <form action="#" class="contact__us-form">
            <div class="group__elements">
            <div class="form__group">
                <input placeholder="Name" type="text" />
            </div>
            <div class="form__group">
                <input type="email" placeholder="Email" name="" id="" />
            </div>
            </div>

            <div class="group__elements">
            <div class="form__group">
                <input type="text" placeholder="Username" name="" id="" />
            </div>
            <div class="form__group">
                <input type="tel" placeholder="Phone" name="" id="" />
            </div>
            </div>

            <div class="form__group">
            <textarea
                placeholder="Message"
                name=""
                id=""
                cols="30"
                rows="10"
            ></textarea>
            </div>
            <div class="form__group">
            <button>Submit</button>
            </div>
        </form>
        </div>
    </div>
</section>
@endsection