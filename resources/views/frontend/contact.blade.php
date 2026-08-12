 @php $pageName = "conatact"; $subpageName = "conatact"; @endphp

@extends('layouts.frontendapp')

@section('content')

<div class="breadcumb-wrapper " data-bg-src="{{asset('frontend/assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="contact">Contact</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<!--==============================Contact Area
    ==============================-->
<section class=" space-top space-extra-bottom ">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="info-style2">
                    <div class="info-icon"><img src="{{asset('frontend/assets/img/icon/c-b-1-1.svg')}}" alt="icon"></div>
                    <h3 class="info-title">Phone No</h3>
                    <p class="info-text"><a href="tel:+233557158426" class="text-inherit">+233 (0) 557 158 426</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-style2">
                    <div class="info-icon"><img src="{{asset('frontend/assets/img/icon/c-b-1-2.svg')}}" alt="icon"></div>
                    <h3 class="info-title">Monday to Friday</h3>
                    <p class="info-text">6.00am – 06.00pm</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-style2">
                    <div class="info-icon"><img src="{{asset('frontend/assets/img/icon/c-b-1-3.svg')}}" alt="icon"></div>
                    <h3 class="info-title">Email Address</h3>
                    <p class="info-text"><a href="mailto:alyaintsch@gmail.com" class="text-inherit">alyaintsch@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section><!--==============================
    Contact Area
    ==============================-->
<section class=" space-extra-bottom ">
    <div class="container">
        <div class="row flex-row-reverse gx-60 justify-content-between">
            <div class="col-xl-auto">
                <img src="{{asset('frontend/assets/img/about/con-2-1.png')}}" alt="girl" class="w-100">
            </div>
            <div class="col-xl col-xxl-6 align-self-center">
                <div class="title-area">
                    <span class="sec-subtitle">Have Any questions? so plese</span>
                    <h2 class="sec-title">Feel Free to Contact!</h2>
                </div>
                <form   class="form-style3 layout2 ajax-contact">
                    <div class="row justify-content-between">
                        <div class="col-md-6 form-group">
                            <label>First Name <span class="required">(Required)</span></label>
                            <input name="firstname" id="firstname" type="text">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name <span class="required">(Required)</span></label>
                            <input name="lastname" id="lastname" type="text">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email Address <span class="required">(Required)</span></label>
                            <input name="email" id="email" type="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Phone Number <span class="required">(Required)</span></label>
                            <input name="number" id="number" type="number">
                        </div>
                        <div class="col-12 form-group">
                            <label>Message <span class="required">(Required)</span></label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message"></textarea>
                        </div>
                        <div class="col-auto form-group">
                            <button class="vs-btn" type="submit">Send Message</button>
                        </div>
                        <p class="form-messages"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!--==============================
Map Area
    ==============================-->
<section class=" space-bottom">
    <div class="container">
        <div class="title-area">
            <h2 class="mt-n2">How To Find Us</h2>
        </div>
        <div class="map-style1">
           <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d4884.499553862295!2d0.025444899999999996!3d5.7669729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwNDYnMDEuMSJOIDDCsDAxJzMxLjYiRQ!5e1!3m2!1sen!2sgh!4v1786538818798!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
    </div>
</section><!--==============================
        Footer Area
==============================-->
@endsection

@section('scripts')
@endsection