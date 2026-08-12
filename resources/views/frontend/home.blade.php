 @php $pageName = "home"; $subpageName = "home"; @endphp

@extends('layouts.frontendapp')

@section('content')
    <section class="vs-hero-wrapper  ">
        <div class="vs-hero-carousel" data-height="770" data-container="1900" data-slidertype="responsive"
            data-navbuttons="true">

            <!-- Slide 1-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="770" src="{{asset('frontend/assets/img/hero/hero.png')}}" class="ls-bg" alt="bg"
                    decoding="async">
                <ls-layer
                    style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; width:255px; height:255px; border-width:60px 60px 60px 60px; border-color:#f77902; border-radius:50% 50% 50% 50%; top:126px; left:740px; z-index:4; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="static:forever;">
                </ls-layer>
                <div style="font-size:36px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; width:711px; height:410px; left:312px; top:213px; background-color:#09099e; border-radius:213px 206px 50px 213px; z-index:5; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="static:forever;"></div>
                <div style="font-size:36px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; opacity:0.9; overflow:visible; width:1200px; height:600px; left:350px; top:76px; background-color:#09099e; border-radius:213px 206px 50px 213px; z-index:5; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="static:forever;"></div>
                <div style="font-size:36px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; opacity:0.9; overflow:visible; width:1300px; height:700px; left:50%; top:33px; background-color:#09099e; border-radius:213px 206px 50px 213px; z-index:5; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="static:forever;"></div>
                <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:284px; left:312px; width:711px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    We Prepare Your
                </h1>
                <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:361px; left:312px; width:711px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; delayin:300; easingin:easeOutQuint; offsetxout:100; easingout:easeOutQuint;">
                    Child For Life
                </h1>
                <p style="font-size:18px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:711px; left:312px; top:438px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:100%; top:494px; font-family:'Fredoka', sans-serif; width:711px; margin-left:-877px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    <a href="contact.html" class="vs-btn">Apply Today</a>
                </div>
                <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:141px; left:50%; width:1200px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    We Prepare Your
                </h1>
                <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:255px; left:50%; width:1200px; font-size:90px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    Child For Life
                </h1>
                <p style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:1200px; left:50%; top:384px; font-size:38px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:495px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    <a href="contact.html" class="vs-btn">Apply Today</a>
                </div>
                <h1 style="font-size:110px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:113px; left:50%; width:1200px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    We Prepare Your
                </h1>
                <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:247px; left:50%; width:1200px; font-size:110px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    Child For Life
                </h1>
                <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:430px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    <a href="contact.html" class="vs-btn">Apply Today</a>
                </div>
            </div>


            <!-- Slide 2-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:out; kenburnsscale:1.1;">
                <img width="1920" height="770" src="{{asset('frontend/assets/img/hero/hero2.png')}}" class="ls-bg" alt="bg"
                    decoding="async">
                <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:284px; left:312px; width:711px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    Special Child Session
                </h1>
                <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:361px; left:312px; width:711px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; delayin:300; easingin:easeOutQuint; offsetxout:100; easingout:easeOutQuint;">
                    For Brain Growth
                </h1>
                <p style="font-size:18px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:711px; left:312px; top:438px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:100%; top:494px; font-family:'Fredoka', sans-serif; width:711px; margin-left:-877px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    <a href="contact.html" class="vs-btn">Apply Today</a>
                </div>
                <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:141px; left:50%; width:1200px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    Special Child Session
                </h1>
                <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:255px; left:50%; width:1200px; font-size:90px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    For Brain Growth
                </h1>
                <p style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:1200px; left:50%; top:384px; font-size:38px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:495px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    <a href="contact.html" class="vs-btn">Apply Today</a>
                </div>
                <h1 style="font-size:110px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:113px; left:50%; width:1200px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    Special Child Session
                </h1>
                <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:247px; left:50%; width:1200px; font-size:110px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    For Brain Growth
                </h1>
                <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:430px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    <a href="contact.html" class="vs-btn">Apply Today</a>
                </div>
            </div>


            <!-- Slide 3-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="770" src="{{asset('frontend/assets/img/hero/hero3.png')}}" class="ls-bg" alt="bg"
                    decoding="async">
                <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:284px; left:312px; width:711px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    Best Children Study
                </h1>
                <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:361px; left:312px; width:711px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; delayin:300; easingin:easeOutQuint; offsetxout:100; easingout:easeOutQuint;">
                    And Furture Care
                </h1>
                <p style="font-size:18px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:711px; left:312px; top:438px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:100%; top:494px; font-family:'Fredoka', sans-serif; width:711px; margin-left:-877px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    <a href="contact.html" class="vs-btn">Apply Today</a>
                </div>
                <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:141px; left:50%; width:1200px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    Best Children Study
                </h1>
                <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:255px; left:50%; width:1200px; font-size:90px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    And Furture Care
                </h1>
                <p style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:1200px; left:50%; top:384px; font-size:38px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:495px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    <a href="contact.html" class="vs-btn">Apply Today</a>
                </div>
                <h1 style="font-size:110px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:113px; left:50%; width:1200px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    Best Children Study
                </h1>
                <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:247px; left:50%; width:1200px; font-size:110px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                    And Furture Care
                </h1>
                <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:430px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                    <a href="contact.html" class="vs-btn">Apply Today</a>
                </div>
            </div>

        </div>
    </section>
      <section class="about-layout space-top space-extra-bottom z-index-common">
        <img src="{{asset('frontend/assets/img/elements/ab-ele-8-2.svg')}}" alt="ab" class="ele1">
        <img src="{{asset('frontend/assets/img/elements/ab-ele-8-1.svg')}}" alt="ab" class="ele2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-6 mb-30">
                    <div class="title-area">
                        <span class="sec-subtitle">OUR STORY FIFTEEN YEARS AGO,</span>
                        <h2 class="sec-title">Guiding the Young Generation to Success.</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-11">
                            <p class="sec-text mb-4 pe-xl-4">Fifteen years ago, we began our journey in early childhood education, fueled by a deep passion for nurturing young minds. After spending a decade successfully building and operating our first Early Childhood education system,.. .</p>
                        </div>
                        <div class="col-lg-11">
                            <div class="enrol-info mb-30">
                                <div class="enrol-box style2">
                                    <div class="enrol-icon"><img src="{{asset('frontend/assets/img/icon/ab-8-1.svg')}}" alt="ab"></div>
                                    <div class="enrol-content">
                                        <h4 class="title">Our Mission</h4>
                                        <p>At  Alya International School of Success our dedicated team nurtures and provides quality childcare
                                             for families of all economic levels and cultural backgrounds...
                                        </p>
                                    </div>
                                </div>
                                <div class="enrol-box style2">
                                    <div class="enrol-icon"><img src="{{asset('frontend/assets/img/icon/ab-8-2.svg')}}" alt=""></div>
                                    <div class="enrol-content">
                                        <h4 class="title">Our Vision</h4>
                                        <p>Our goal is to redefine excellence in early childhood education by merging research-validated practices with personalized, compassionate care that empowers whole-child development...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="about" class="vs-btn style4" tabindex="0">Discover More</a>
                </div>
                <div class="col-xl-auto col-lg-6 mb-30">
                    <div class="img-box11">
                        <img src="{{asset('frontend/assets/img/about/aya.jpeg')}}" alt="ab" class="img1">
                        <img src="{{asset('frontend/assets/img/about/ab-8.png')}}" alt="ab" class="img2">
                        <div class="special-fact">
                            <span class="fact-title">Trusted By</span>
                            <span class="fact-number">80+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="z-index-common select-layout7">
        <div class="img-box10" data-bg-src="{{asset('frontend/assets/img/others/others.png')}}">
            <img src="{{asset('frontend/assets/img/others/select-shape-1.svg')}}" alt="select" class="select-shape1">
            <div class="select-icon-card">
                <img src="{{asset('frontend/assets/img/others/se-icon-7-1.svg')}}" alt="icon" class="icon-img">
                <h3 class="select-title">Converse Confidence</h3>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6">
                    <div class="select-content">
                        <div class="title-area">
                            <span class="sec-subtitle">Why Select US</span>
                            <h2 class="sec-title pe-xl-5">Your Child's Best Start In Life</h2>
                        </div>
                        <h4 class="subtitle">Enrol Your Child In A Session Now!</h4>
                        <p class="pe-xl-5">At Alya International School, we believe every child deserves an early foundation built on curiosity, confidence, and care. From our nurturing Montessori-inspired preschool classrooms curriculum, we walk alongside every child's journey — combining academic excellence with genuine warmth.</p>
                        
                        
                    </div>
                    
                    
                    <div class="accordion accordion-style1" id="faqVersion1">
                        <div class="accordion-item active">
                            <div class="accordion-header" id="headingOne1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                    Quality Education
                                </button>
                            </div>
                            <div id="collapseOne1" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne1" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>We provide a strong educational foundation designed to develop critical thinking, creativity, communication, and a lifelong love for learning.
                                         </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                   Caring & Supportive Environment
                                </button>
                            </div>
                            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Every child is treated with care, respect, and understanding. We create a safe and welcoming environment where children feel confident to explore and express themselves. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree1" aria-expanded="false"
                                    aria-controls="collapseThree1">
                                    Child-Centered Learning
                                </button>
                            </div>
                            <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Our learning approach recognizes that children learn differently. We encourage curiosity, hands-on activities, discovery, and learning at each child's pace.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                                    International Perspective
                                </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1"
                                data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>We expose our learners to diverse ideas, cultures, and experiences, preparing them to become confident citizens of an increasingly connected world. </p>
                                </div>
                            </div>
                        </div>
                       
                     
                </div>
                </div>
            </div>
        </div>
    </section>
      <section class=" space-extra-bottom">
        <div class="container">
            <div class="title-area text-center">
                <div class="sec-bubble">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                </div>
                <h2 class="sec-title">Enrol Your Child In A Session Now!</h2>
                <p class="sec-text">At Ayla we offer extra •	Extracurricular  activities which includes the following ,</p>
            </div>
            <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3"
                data-md-slide-show="2">
                <div class="service-style1 col-xl-3">
                    <div class="service-body">
                        <div class="service-img"><a href="service-details.html"><img src="{{asset('frontend/assets/img/service/sr.png')}}"
                                    alt="service"></a></div>
                        <div class="service-content">
                            <div class="service-icon"><img src="{{asset('frontend/assets/img/icon/sr-1-1.svg')}}" alt="icon"></div>
                            <h3 class="service-title"><a href="service-details.html">Sport</a></h3>
                            <p class="service-text">Age-appropriate sports and physical activities help children develop fitness, teamwork, discipline, coordination, and a healthy competitive spirit.</p>
                             
                        </div>
                    </div>
                </div>
                <div class="service-style1 col-xl-3">
                    <div class="service-body">
                        <div class="service-img"><a href="service-details.html"><img src="{{asset('frontend/assets/img/service/sr-1-2.jpg')}}"
                                    alt="service"></a></div>
                        <div class="service-content">
                            <div class="service-icon"><img src="{{asset('frontend/assets/img/icon/sr-1-2.svg')}}" alt="icon"></div>
                            <h3 class="service-title"><a href="service-details.html">Art</a></h3>
                            <p class="service-text">Children explore colors, drawing, painting, and crafts while developing creativity, imagination, and fine motor skills.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="service-style1 col-xl-3">
                    <div class="service-body">
                        <div class="service-img"><a href="#"><img src="{{asset('frontend/assets/img/service/ms.png')}}"
                                    alt="service"></a></div>
                        <div class="service-content">
                            <div class="service-icon"><img src="{{asset('frontend/assets/img/icon/sr-1-3.svg')}}" alt="icon"></div>
                            <h3 class="service-title"><a href="#">Music</a></h3>
                            <p class="service-text">Through songs, instruments, and rhythm activities, children develop musical awareness, listening skills, coordination, and self-expression.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="service-style1 col-xl-3">
                    <div class="service-body">
                        <div class="service-img"><a href="#"><img src="{{asset('frontend/assets/img/service/ms.png')}}"
                                    alt="service"></a></div>
                        <div class="service-content">
                            <div class="service-icon"><img src="{{asset('frontend/assets/img/icon/sr-1-4.svg')}}" alt="icon"></div>
                            <h3 class="service-title"><a href="#">Dance  </a></h3>
                            <p class="service-text">Dance encourages children to express themselves through movement while building confidence, coordination, balance, and creativity.</p>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div data-bg-src="assets/img/bg/bg-h-1-1.jpg">
        <section class=" space-extra" data-bg-src="{{asset('frontend/assets/img/bg/table-bg-1-1.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-10 col-xxl-8">
                    <div class="table-style1">
                        <div class="table-icon"><i class="fal fa-alarm-clock"></i></div>
                        <h2 class="sec-title">Session Times</h2>
                        <p class="sec-text">We provide full day care from 6.00am to 6.00pm for children aged 6 months
                         </p>
                        <div class="table-body">
                            <div class="tr">
                                <div class="th">Early Drop Off</div>
                                <div class="td">8.00am – 10.00am</div>
                            </div>
                            <div class="tr">
                                <div class="th">Morning</div>
                                <div class="td">10.30am – 12.00am</div>
                            </div>
                            <div class="tr">
                                <div class="th">Lunch</div>
                                <div class="td">12noon – 1.00pm</div>
                            </div>
                            <div class="tr">
                                <div class="th">Afternoon</div>
                                <div class="td">2.00am – 4.00am</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection