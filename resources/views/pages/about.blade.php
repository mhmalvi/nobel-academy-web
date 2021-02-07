@extends('layouts.app')

@section('content')
    <!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-content">
          <h1>About NTA</h1>
          <p>We offer certified courses in the beauty industry that you can rely on</p>
          <div class="page_nav">
        <span>You are here:</span> <a href="index.html">Home</a> <span><i class="fa fa-angle-double-right"></i>About NTA</span>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!--Page Header-->
  
  
  <!--ABout US-->
  <section id="about" class="padding">
    <div class="container aboutus">
      <div class="row">
        <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">
         <h2 class="heading heading_space">Welcome to NTA <span class="divider-left"></span></h2>
         <h4 class="bottom25">It’s all going  about making ideas happen. Nor again is there anyone who loves or pursues or desires</h4>
         <p class="bottom25" style="text-align: justify;">Noble Training Academy was established in 2016 and is privately operated Registered Training Organisation. 
          Our courses are provided within Australia. We offer a range of nationally recognised qualifications from Certificate III to Diploma level in beauty industry.</p>
         <p class="bottom25" style="text-align: justify;">Dedicated to our duty as a nationally recognised training provider, we want to empower our students with the right blend of theoretical and pragmatic knowledge.</p>
        </div>
        <div class="col-md-5 wow fadeInRight" data-wow-delay="300ms">
          <div class="image">
           <img src="{{asset('assets/images/about-us.jpg')}}" alt="NTA">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--ABout US-->
  
  <!-- Company History -->
  <section id="history" class="padding bg_grey">
    <div class="container aboutus">
      <div class="card mb-3" style="background-color: transparent; border: 0px;">
        <h2 class="heading text-center">Our Mission<span class="divider-center"></span></h2>
        <div style="padding: 20px 0px;"></div>
          <div class="row no-gutters">
              <div class="col-md-5">
                  <img src="{{asset('assets/images/about/mission.svg')}}" style="max-width: 450px;" alt="contact from">
              </div>
              <div class="col-md-7">
                  <div class="card-body">
                      <div style="padding: 20px 0px;"></div>
                      <h4 style="font-size: 1.2rem; text-align: justify;">
                        Our mission is to provide quality training and assessment that will make you proficient in required skills on successive completion of the enrolled course. With us, you take a step forward in your career. We support our students at all time and guide throughout the training as well as go beyond to ensure that we meet your expectations.
                      </h4>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- Company History -->

  <!-- University Tour -->
  <section id="tours" class="padding">
    <div class="container aboutus">
      <div class="card mb-3" style="background-color: transparent; border: 0px;">
        <h2 class="heading text-center">Our Vision<span class="divider-center"></span></h2>
        <div style="padding: 20px 0px;"></div>
          <div class="row no-gutters">
              <div class="col-md-7">
                  <div class="card-body">
                    <div style="padding: 30px 0px;"></div>
                      <h4 style="font-size: 1.2rem; text-align: justify;">
                        We intend to grow exponentially catering our training to every nook in Australia.
                        <br>
                        <br>
                        We believe, with our expertise you can upscale your skills.
                        In accordance with the Australian Qualification Framework (AQF) accredited qualifications and accredited courses use RPL (Recognition of Prior Learning), RCC (Recognition of Current Competencies), 
                        and Gap Training to evaluate the training participant's level of skill or competence against the endorsed industry or enterprise competency standards or outcomes specified.
                      </h4>
                  </div>
              </div>
              <div class="col-md-5">
                <img src="{{asset('assets/images/about/vission.svg')}}" style="max-width: 450px;" alt="contact from">
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- University Tour -->
@endsection