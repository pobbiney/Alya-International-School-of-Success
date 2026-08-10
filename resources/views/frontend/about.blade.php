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
                        <div class="transform-banner"><img src="{{asset('frontend/assets/img/about/ab1.png')}}" alt="about"></div>
                        <div class="vs-circle jump"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="service-description">
                        <h2>Our Story</h2>
                        <div class="title-divider2"></div>
                        <p>Fifteen years ago, we began our journey in early childhood education, 
                            fueled by a deep passion for nurturing young minds. After spending a 
                            decade successfully building and operating our first Early Childhood education system, 
                            we felt a profound calling to expand our reach into a new community. Recognizing a
                            distinct shortage of high-quality, inclusive early learning options in this rapidly 
                            growing neighborhood, we envisioned a more holistic, play-based center that champions 
                            sensory-driven discovery. For us, opening this new center is more than a passion project; 
                            it is a dedicated mission to support and uplift our new community. </p>
                            <h2>History</h2>
                        <div class="title-divider2"></div>
                        <p>At the heart of our mission is a commitment to inclusivity and diversity, 
                            ensuring that we nurture and provide quality childcare for families of all 
                            economic levels, cultural backgrounds, and abilities. We believe in creating a 
                            space where every child's uniqueness is celebrated, valued, and respected, while
                             cultivating a strong character foundation rooted in respect, kindness, and empathy. 
                             By redefining holistic excellence in early childhood education, we merge research-validated
                              practices with personalized, compassionate care to empower whole-child development. 
                              Above all, we maintain a safe, caring, and supportive environment that fosters a
                               positive self-image and allows every child to thrive. </p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class=" space-extra-bottom">
        <div class="container">
            <div class="row gx-80">
                <div class="col-lg-6 pb-3 pb-xl-0">
                    <div class="img-box3">
                        <div class="img-1 mega-hover">
                            <img src="{{asset('frontend/assets/img/about/faq-1-1.jpg')}}" alt="FAQ">
                             
                        </div>
                        <div class="vs-circle jump"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="title-area text-center text-lg-start">
                        
                        {{-- <h2 class="sec-title">Guide to Preschool</h2> --}}
                    </div>
                    <div class="accordion accordion-style1" id="faqVersion1">
                        <div class="accordion-item active">
                            <div class="accordion-header" id="headingOne1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                   Our Mission
                                </button>
                            </div>
                            <div id="collapseOne1" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne1" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>At  Alya International School of Success our dedicated team nurtures and provides 
                                        quality childcare for families of all economic levels and cultural backgrounds. 
                                        We strive to create an inclusive environment that encourages children of all abilities 
                                        to become lifelong learners and reach their maximum potential. We believe in fostering 
                                        a safe and caring atmosphere that promotes a positive self-image and a love of learning 
                                        where every child is respected and valued for their uniqueness.  Our mission is to
                                         provide a comprehensive early childhood education program that meets the individual 
                                         needs and interests of each child, from physical growth to cognitive development. 
                                         We are committed to building a strong foundation of respect, kindness, and empathy, 
                                         ensuring that all school-age children can reach their full potential.
                                         By maintaining a supportive environment and offering enriching learning
                                          experiences, we ensure that every child is valued, respected, and celebrated.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                   Vission
                                </button>
                            </div>
                            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>: Our goal is to redefine excellence in early childhood education by merging 
                                        research-validated practices with personalized, compassionate care that empowers
                                         whole-child development.  At Alya International School of Success, our vision is 
                                         to serve as a premier inclusive community where children of all abilities,
                                          economic levels, and cultural backgrounds are nurtured into lifelong learners.
                                           We are dedicated to maintaining a safe, supportive environment that fosters a 
                                           positive self-image and celebrates each child's uniqueness through a 
                                           foundation of respect, kindness, and empathy. By delivering a 
                                        comprehensive early childhood education program tailored to individual cognitive and
                                         physical needs, we empower every student to reach their maximum potential. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree1" aria-expanded="false"
                                    aria-controls="collapseThree1">
                                   Our Values
                                </button>
                            </div>
                            <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Our core values center on inclusivity and diversity by nurturing and providing 
                                        quality childcare for families of all economic levels, cultural backgrounds, 
                                        and abilities where every child's uniqueness is celebrated, valued, and respected;
                                         cultivating a character foundation rooted in respect, kindness, and empathy; redefining
                                          holistic excellence in early childhood education by merging research-validated practices with personalized, 
                                        compassionate care to empower whole-child development; and maintaining a safe,
                                         caring, and supportive environment that fosters a positive self-image. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                                    Philosophy of Early Childhood Education
                                </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Educational Philosophy At Alya International School of Success, we believe 
                                        in providing a comprehensive early childhood education program tailored to 
                                        the individual physical, cognitive, and emotional needs and interests of each child. 
                                        By offering enriching learning experiences and fostering a love of learning, we aim 
                                        to inspire children to become lifelong learners and empower them to reach their maximum potential.
 </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
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
                        </div><br/>
                        <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Quality Education</a></h3>
                        <p class="feature-text">We provide a strong educational foundation designed to develop critical thinking, creativity, communication, and a lifelong love for learning.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{asset('frontend/assets/img/choose/choose-1-2.png')}}" alt="image">
                        </div><br/>
                        <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit"> 
                                Caring & Supportive Environment</a></h3>
                        <p class="feature-text">Every child is treated with care, respect, and understanding. We create a safe and welcoming environment where children feel confident to explore and express themselves.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{asset('frontend/assets/img/choose/choose-1-3.png')}}" alt="image">
                        </div><br/>
                        <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit">Learning Beyond the Classroom
                                 </a></h3>
                        <p class="feature-text">Education goes beyond textbooks. Through creative activities, play, practical experiences, sports, arts, and technology, children develop skills they can use in everyday life.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{asset('frontend/assets/img/choose/choose-1-4.png')}}" alt="image">
                        </div><br/>
                        <h3 class="feature-title h5"><a href="service-details.html" class="text-inherit"> 
                                 Child-Centered Learning</a></h3>
                        <p class="feature-text">Our learning approach recognizes that children learn differently. We encourage curiosity, hands-on activities, discovery, and learning at each child's pace.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection