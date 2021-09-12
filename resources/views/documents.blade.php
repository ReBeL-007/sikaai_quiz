@extends('site.master')
@section('title','Courses')

@section('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/courses.css')}}" />
@endsection

@section('content')
<section class="section document__container">
    <h3 class="title">Document</h3>
    <div class="document">
        <a href="{{ asset('frontend/docs/TU-CMAT-Model-Question.pdf')}}" class="document__anker" target="_blank">
            <div class="individual__pdf">
                <!-- image container -->
                <div class="individual__pdf-img">
                    <img src="https://nepaledufair.com/official-site/pdf.svg" alt="">
                    <!-- <img src="" alt=""> -->
                </div>
                <strong class="document__name">

                    TU CMAT Model Question

                </strong>
            </div>
        </a>
        <a href="{{ asset('frontend/docs/SIKAAI-KUUMAT-SAMPLE-QUESTIONS.docx')}}" class="document__anker" target="_blank">
            <div class="individual__pdf">
                <!-- image container -->
                <div class="individual__pdf-img">
                    <img src="https://nepaledufair.com/official-site/pdf.svg" alt="">
                    <!-- <img src="" alt=""> -->
                </div>
                <strong class="document__name">

                SIKAAI KUUMAT SAMPLE QUESTIONS

                </strong>
            </div>
        </a>
    </div>
</section>
@endsection
