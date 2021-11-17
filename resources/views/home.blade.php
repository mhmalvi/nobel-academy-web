@extends('layouts.app')
@section('title', 'Noble Training Academy')

    @push('seo')
        <meta name="description"
            content="Noble Training Academy was established in 2016 and is privately operated Registered Training Organisation. Our courses are provided within Australia." />
    @endpush

    @push('og')
        <meta property="og:keywords"
            content="beauty therapy,remedial massage,hair dressing,certificate iii,diploma,colleges in australia,certificate ii">
        <meta property="og:description"
            content="Noble Training Academy was established in 2016 and is privately operated Registered Training Organisation. Our courses are provided within Australia.">
    @endpush

@section('content')
    @include('components.slider')
    <!-- Company History -->
    <section id="history" class="padding bg_grey">
        <div class="container aboutus">
            <div class="card mb-3" style="background-color: transparent; border: 0px;">
                <h2 class="heading text-center">Recognition of Prior Learning (RPL) Certificate in Australia<span
                        class="divider-center"></span></h2>
                <div style="padding: 20px 0px;"></div>
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body">
                            <p class="text-center">
                                Recognition of Prior Learning (RPL) is an evaluation process used by RTOs to evaluate a
                                person's expertise, knowledge, and experience acquired by working and learning in Australia
                                or abroad. Whether through life experience, education, or other activities such as
                                volunteering. RTOs can also provide credit for units of competency, which can cut down on
                                the time it takes to complete a certification.
                            </p>
                            <p class="text-center">
                                The Australian Qualification Framework (AQF) acknowledged student's previous expertise,
                                skills, and training. To enhance student's progression into and between qualifications, they
                                design RPL training.
                            </p>
                            <p class="text-center">
                                Turn your work experience or a degree into a nationally recognized credential. With our
                                quick and straightforward RPL training, you can fill in any knowledge gap. Once your skills
                                are certified by RTO, your RPL certificate will bring a massive boost to your career. Your
                                career will fly!
                            </p>
                            <p class="text-center"> Each Registered Training Organization has its policies and procedures
                                for determining the
                                RPL assessment, but the basic principles remain the same. The knowledge and skills you've
                                learned at work or in school will help you complete a certification faster and reduce the
                                time it takes to complete a course to get you closer to your goal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company History -->
    <section class="rpl">
        <button type="button" class="rpl-btn" data-toggle="rpl-modal" id="toggle-modal">
            <lord-icon
                src="https://cdn.lordicon.com//pndvzexs.json"
                trigger="loop"
                colors="primary:#002B46,secondary:#002B46"
                class="lord-icon-size">
            </lord-icon>
            Click Here For Your Free Skill Check
        </button>
    </section>
    <!--ABout US-->
    <section id="about" class="padding">
        <div class="container">
            <h1 class="heading heading_space text-center" style="display: block;">About Us <span
                    class="divider-center"></span></h1>
            <div class="row">
                <div class="icon_wrap padding-bottom-half clearfix">
                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                        <i class="icon-globe"></i>
                        <h4 class="text-capitalize bottom20 margin10">Qualification</h4>
                        <p class="no_bottom text-justify">We provide industry-specific knowledge and skills so you can
                            become job-ready once you complete your qualification</p>
                    </div>
                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
                        <i class="icon-layers"></i>
                        <h4 class="text-capitalize bottom20 margin10">Features</h4>
                        <p class="no_bottom text-justify">Noble Training Academy (RTO code 70201) is Providing nationally
                            accredited training and Recognition of Prior Learning Australia wide.</p>
                    </div>
                    <div class="col-sm-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                        <i class="icon-laptop"></i>
                        <h4 class="text-capitalize bottom20 margin10">RPL</h4>
                        <p class="no_bottom text-justify">Recognition of prior learning is an assessment process that
                            recognises an expert's knowledge and certifies it.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container margin_top">
            <div class="row">
                <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">
                    <h1 class="heading bottom25">Why Choose Us <span class="divider-left"></span></h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-post">
                                <a href="#." class="border_radius"><img src="{{ asset('assets/images/hands.png') }}"
                                        alt="hands"></a>
                                <h4>Training</h4>
                                <p>Nationally Accredited Training</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-post">
                                <a href="#." class="border_radius"><img src="{{ asset('assets/images/social-care.png') }}"
                                        alt="hands"></a>
                                <h4>Support Learning</h4>
                                <p>Support in terms of learning</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-post">
                                <a href="#." class="border_radius"><img src="{{ asset('assets/images/maintenance.png') }}"
                                        alt="hands"></a>
                                <h4>Fexible</h4>
                                <p>Flexible with student depending on outcome</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-post">
                                <a href="#." class="border_radius"><img src="{{ asset('assets/images/home.png') }}"
                                        alt="hands"></a>
                                <h4>Course Fee</h4>
                                <p>Affordable course fees</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 wow fadeInRight">
                    <img src="{{ asset('assets/images/about/about01.webp') }}" alt="our priorties" class="img-responsive"
                        style="width:100%; padding-top:75px;">
                </div>
            </div>
        </div>
    </section>
    <!--ABout US-->


    <!-- Courses -->

    @php
    $DBT = 'This qualification reflects the role of individuals employed as beauty therapists to provide a broad range of beauty therapy treatments and services including facial treatments, body massage and treatments, hair removal, lash and brow treatments, nail and make-up services.';
    $CBT = 'This qualification reflects the role of individuals who work as beauty therapists to provide a range of beauty therapy treatments and services, including lash and brow treatments, nail services, make-up, massage and waxing.';
    $CHD = 'This qualification reflects the role of hairdressers who use a range of well-developed sales, consultation and technical skills and knowledge to provide a broad range of hairdressing services to clients.';
    $DRM = 'This qualification reflects the role of remedial massage therapists who work with clients presenting with soft tissue dysfunction, musculoskeletal imbalance or restrictions in range of motion (ROM).';
    @endphp

    <section id="courses" class="padding parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown">
                    <h1 class="heading heading_space">Our Courses<span class="divider-left"></span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="slider_wrapper">
                        <div id="course_slider" class="owl-carousel">
                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('assets/images/courses/thumb01.webp') }}" alt="Courses"
                                        class="img-responsive border_radius">
                                </div>
                                <h3 class="bottom15"><a href="{{ route('diplomaInBeauty') }}" class="course_name">SHB50115
                                        -
                                        Diploma in Beauty Therapy</a></h3>
                                <p class="bottom15">
                                    <?php echo mb_strimwidth($DBT, 0, 200, '...'); ?>
                                </p>
                                <a href="{{ route('diplomaInBeauty') }}" class="btn_common blue border_radius">Read
                                    More</a>
                            </div>
                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('assets/images/courses/thumb02.webp') }}" alt="Courses"
                                        class="img-responsive border_radius">
                                </div>
                                <h3 class="bottom15"><a href="{{ route('beautyTherapy') }}" class="course_name">SHB40115
                                        -
                                        Certificate IV in Beauty Therapy</a></h3>
                                <p class="bottom15">
                                    <?php echo mb_strimwidth($CBT, 0, 200, '...'); ?>
                                </p>
                                <a href="{{ route('beautyTherapy') }}" class="btn_common blue border_radius">Read
                                    More</a>
                            </div>
                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('assets/images/courses/thumb03.webp') }}" alt="Courses"
                                        class="img-responsive border_radius">
                                </div>
                                <h3 class="bottom15"><a href="{{ route('hairdressing') }}" class="course_name">SHB30416 -
                                        Certificate III in Hairdressing</a></h3>
                                <p class="bottom15">
                                    <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>
                                </p>
                                <a href="{{ route('hairdressing') }}" class="btn_common blue border_radius">Read More</a>
                            </div>
                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('assets/images/courses/thumb04.webp') }}" alt="Courses"
                                        class="img-responsive border_radius">
                                </div>
                                <h3 class="bottom15"><a href="{{ route('diplomaInRemedial') }}"
                                        class="course_name">HLT52015 - Diploma in Remedial Massage</a></h3>
                                <p class="bottom15">
                                    <?php echo mb_strimwidth($DRM, 0, 200, '...'); ?>
                                </p>
                                <a href="{{ route('diplomaInRemedial') }}" class="btn_common blue border_radius">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses -->

    <!--Customers Review-->
    <section id="reviews" class="padding bg_light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown text-center">
                    <h1 class="heading heading_space">GRADUATES OF NOBLE TRAINING ACADEMY - RTO CODE 70201 <span
                            class="divider-center"></span></h1>
                    <p>HLT52015 - DIPLOMA OF REMEDIAL MASSAGE; WILL NOW BE ADMINISTERED TO THE INDIVIDUAL PRIVATE HEALTH
                        FUNDS FOR THE PURPOSES OF GAINING APPROVED PROVIDER STATUS. GRADUATES HAVE THE OPTION OF BEING
                        ADMINISTERED BY ANY OF THE FOLLOWING ASSOCIATIONS, HOWEVER ITS NOT GUARANTEED BY THE RTO THAT YOU
                        WILL GET IT AS IT IS SUBJECT TO APPROVAL BY THE ASSOCIATIONS POLICY-</p>
                    <div style="padding: 15px 0px;"></div>
                </div>
            </div>
            <div class="row">
                <!--<div class="col-md-3 d-flex justify-content-center" style="padding: 15px 0px;">-->
                <!--    <img src="{{ asset('assets/images/logo/ATMS.webp') }}" alt="ATMS" class="img-responsive border_radius" style="max-width: 150px; max-height: 150px;">-->
                <!--</div>-->
                <!--<div class="col-md-3 d-flex justify-content-center" style="padding: 15px 0px;">-->
                <!--    <img src="{{ asset('assets/images/logo/MYT.webp') }}" alt="MYT" class="img-responsive border_radius" style="max-width: 150px; max-height: 150px;">-->
                <!--</div>-->
                <div class="col-md-6 d-flex justify-content-center" style="padding: 15px 0px;">
                    <img src="{{ asset('assets/images/logo/FCMA.webp') }}" alt="FCMA" class="img-responsive border_radius"
                        style="max-width: 150px; max-height: 150px;">
                </div>
                <div class="col-md-6 d-flex justify-content-center" style="padding: 15px 0px;">
                    <img src="{{ asset('assets/images/logo/MAA.webp') }}" alt="MAA" class="img-responsive border_radius"
                        style="max-width: 150px; max-height: 150px;">
                </div>
            </div>
        </div>
    </section>

    <!-- News-->
    <section id="news" class="padding">
        <div class="container">
            <div class="card mb-3" style="border: 0px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/form/form.webp') }}" class="card-img" alt="contact from">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="padding: 0px;">
                            <h1 class="heading">How Can We Help?<span class="divider-left"></span></h1>
                            <div style="padding: 30px 0px;">
                                <p>We'd love to hear from you, please drop us a line if you have any query. We'll do our
                                    best to get back to you as soon as possible.</p>
                            </div>
                            <form class="form-inline findus" id="contact-form" method="POST"
                                action="{{ route('contactus') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="result"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                id="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="subject" name="subject"
                                                id="website" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea placeholder="Comment" name="message" id="message"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn_common yellow border_radius"
                                            id="btn_submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
