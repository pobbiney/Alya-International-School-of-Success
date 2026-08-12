 @php $pageName = "admission"; $subpageName = "admission"; @endphp

@extends('layouts.frontendapp')

@section('content')
<div class="breadcumb-wrapper " data-bg-src="{{asset('frontend/assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Admissions</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="admission">Admissions</a></li>
                        <li>Apply Now</li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<section class=" space-top space-extra-bottom ">
    <div class="container">
        <div class="row">
           
            <h3> Coming Soon </h3>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@endsection