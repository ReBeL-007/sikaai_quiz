@extends('site.master')

@section('title','Home')

@section('content')
    <section class="section section__intro">
        <div class="intro__description">
          <div class="description__text">
            <span class="small__text">Sikaai makes it easy</span>
            <h1 class="heading__primary">
              Join CMAT & KUUMAT <span> preparation classes </span>
            </h1>
            <span class="online">Online</span>
            <p>Pre-registration open for CMAT & KUUMAT courses on Sikaai.</p>
          </div>
          <a href="{{route('index')}}" class="btn btn-started">Get Started</a>
        </div>
        <div class="intro__image">
          <img src="{{('frontend/img/Parallax image.svg')}}" alt="" />
        </div>
    </section>

@endsection
