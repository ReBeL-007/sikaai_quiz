@extends('site.master')
@section('title','About')

@section('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/aboutUs.css')}}" />
@endsection

@section('content')
<section class="about_us">
      <div class="about_us_left">
        <img
          style="width: 80%"
          src="{{ asset('frontend/img/about us teaching.png')}}"
          alt="teaching"
        />
        <div class="ellipse_left">
          <img src="{{ asset('frontend/img/Ellipse 14.png')}}" alt="ellipse" />
        </div>
      </div>

      <div class="about_us_right">
        <p class="about_us_right_head">
          Learning is not attained by <br />
          chance; it must be sought for with <br />
          ardour and attended to with <br />
          diligence.
        </p>
        <p class="about_us_right_para">
          We’re a nonprofit with the mission to provide a free, world-class
          education for anyone, anywhere.
        </p>
        <div class="ellipse_right">
          <!-- <img src="/frontend/img/Ellipse 14@2x.png" alt="ellipse"> -->
          <svg
            width="191"
            height="191"
            viewBox="0 0 191 191"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="95.5"
              cy="95.5"
              r="95.5"
              fill="#5A60CE"
              fill-opacity="0.7"
            />
          </svg>
        </div>
        <svg
          id="yellow_line"
          width="700"
          height="156"
          viewBox="0 0 721 156"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M0.434328 113.541C520.971 99.3257 663.303 58.7586 669.402 40.2518"
            stroke="#FFA451"
            stroke-width="5"
          />
          <path
            d="M14.0444 93.3944C236.574 89.9562 689.165 78.6326 719.29 60.8436"
            stroke="#FFA451"
            stroke-width="5"
          />
        </svg>

        <svg
          class="ellipse-down"
          style="float: right"
          width="63"
          height="63"
          viewBox="0 0 63 63"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle
            cx="31.5"
            cy="31.5"
            r="31.5"
            fill="#5A60CE"
            fill-opacity="0.7"
          />
        </svg>
      </div>
    </section>

    <section class="our_story">
      <h3 class="our_story_head">Our Story</h3>
      <p class="our_story_para">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rutrum
        malesuada sit duis ultrices diam aliquet nisl non. Nisl fringilla metus,
        ullamcorper urna, consectetur purus imperdiet.Lorem ipsum dolor sit
        amet, consectetur adipiscing elit. Rutrum malesuada sit duis ultrices
        diam aliquet nisl non. Nisl fringilla metus, ullamcorper urna,
        consectetur purus imperdiet.Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Rutrum malesuada sit duis ultrices diam aliquet nisl
        non. Nisl fringilla metus, ullamcorper urna, consectetur purus
        imperdiet.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Rutrum malesuada sit duis ultrices diam aliquet nisl non. Nisl fringilla
        metus, ullamcorper urna, consectetur purus imperdiet.Lorem ipsum dolor
        sit amet, consectetur adipiscing elit. Rutrum malesuada sit duis
        ultrices diam aliquet nisl non. Nisl fringilla metus, ullamcorper urna,
        consectetur purus imperdiet.Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Rutrum malesuada sit duis ultrices diam aliquet nisl
        non. Nisl fringilla metus, ullamcorper urna, consectetur purus
        imperdiet.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Rutrum malesuada sit duis ultrices diam aliquet nisl non. Nisl fringilla
        metus, ullamcorper urna, consectetur purus imperdiet.Lorem ipsum dolor
        sit amet, consectetur adipiscing elit. Rutrum malesuada sit duis
        ultrices diam aliquet nisl non. Nisl fringilla metus, ullamcorper urna,
        consectetur purus imperdiet.Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Rutrum malesuada sit duis ultrices diam aliquet nisl
        non. Nisl fringilla metus, ullamcorper urna, consectetur purus
        imperdiet.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Rutrum malesuada sit duis ultrices diam aliquet nisl non. Nisl fringilla
        metus, ullamcorper urna, consectetur purus imperdiet.Lorem ipsum dolor
        sit amet, consectetur adipiscing elit. Rutrum malesuada sit duis
        ultrices diam aliquet nisl non. Nisl fringilla metus, ullamcorper urna,
        consectetur purus imperdiet.Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Rutrum malesuada sit duis ultrices diam aliquet nisl
        non. Nisl fringilla metus, ullamcorper urna, consectetur purus
        imperdiet.
      </p>
    </section>

    <section class="why_sikaai_section">
      <h2>WHY SIKAAI ?</h2>
      <div class="why_sikaai">
        <div class="why_sikaai_desc">
          <img src="{{ asset('frontend/img/raising-hand.png')}}" alt="image" />
          <h5>Lorem Ipsum</h5>
        </div>

        <div class="why_sikaai_desc">
          <img src="{{ asset('frontend/img/raising-hand.png')}}" alt="image" />
          <h5>Lorem Ipsum</h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rutrum
            malesuada sit duis ultrices diam aliquet nisl non. Nisl fringilla
            metus, ullamcorper urna <br />, consectetur purus imperdiet.
          </p>
        </div>

        <div class="why_sikaai_desc">
          <img src="{{ asset('frontend/img/raising-hand.png')}}" alt="image" />
          <h5>Lorem Ipsum</h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rutrum
            malesuada sit duis ultrices diam aliquet nisl non. Nisl fringilla
            metus, ullamcorper urna <br />, consectetur purus imperdiet.
          </p>
        </div>
      </div>
    </section>

    <section class="about_sign">
      <p style="text-align: center; font-size: 1.5rem">
        To get a step closer to your Dream Career.
      </p>
      <div class="sign_us">
        <span>SIGN US FOR FREE</span>
        <p>To get a step closer to your Dream Career.</p>
      </div>
    </section>
@endsection