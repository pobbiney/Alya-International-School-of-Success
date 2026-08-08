 @php $pageName = "home"; $subpageName = "home"; @endphp

@extends('layouts.frontendapp')

@section('content')
 <div class="breadcumb-wrapper " data-bg-src="{{asset('frontend/assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

     
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between flex-row-reverse">
                <div class="col-lg-6 col-xl-auto text-center text-lg-end">
                    <div class="img-box2">
                        <div class="transform-banner"><img src="{{asset('frontend/assets/img/about/ab-2-1.jpg')}}" alt="about"></div>
                        <div class="vs-circle jump"></div>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <h2 class="sec-title me-xxl-5">Our Story</h2>
                    <p class="sec-text col-xl-10 pe-4 mb-4">Fifteen years ago, we began our journey in early childhood education, fueled by a deep passion for nurturing young minds. After spending a decade successfully building and operating our first Early Childhood education system, we felt a profound calling to expand our reach into a new community. Recognizing a distinct shortage of high-quality, inclusive early learning options in this rapidly growing neighborhood, we envisioned a more holistic, play-based center that champions sensory-driven discovery. For us, opening this new center is more than a passion project; it is a dedicated mission to support and uplift our new community.</p>
                    
                </div>
            </div>
        </div>
    </section> 
      <section class="space-top space-extra-bottom" style="background: #f77902">
        <div class="container">
            <div class="row text-center text-lg-start">
                <div class="col-lg-5 col-xl-6 mb-n4 mb-lg-0">
                    <div class="title-area">
                        <span class="sec-subtitle text-white">Why Choose Us</span>
                        <h2 class="sec-title text-white">Our Core Values</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="title-area">
                        <p class="sec-text text-white">We are constantly expanding the range of services offered, taking
                            care of children of all ages. Our goal is to carefully educate and develop children in a fun
                            way. We strive to turn the learning process into a bright.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mt-4 pt-2">
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{asset('frontend/assets/img/choose/choose-1-1.png')}}" alt="image">
                        </div>
                        <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Learn And
                                Play</a></h3>
                        <p class="feature-text">Our goal is to carefully educate and develop children in a fun way.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{asset('frontend/assets/img/choose/choose-1-2.png')}}" alt="image">
                        </div>
                        <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Great
                                Teachers</a></h3>
                        <p class="feature-text">Our goal is to carefully educate and develop children in a fun way.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{asset('frontend/assets/img/choose/choose-1-3.png')}}" alt="image">
                        </div>
                        <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Family
                                Environment</a></h3>
                        <p class="feature-text">Our goal is to carefully educate and develop children in a fun way.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{asset('frontend/assets/img/choose/choose-1-4.png')}}" alt="image">
                        </div>
                        <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Excellent
                                Programmes</a></h3>
                        <p class="feature-text">Our goal is to carefully educate and develop children in a fun way.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection