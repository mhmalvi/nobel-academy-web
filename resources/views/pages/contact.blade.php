@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1>Contact Us</h1>
                    <p>We offer certified courses in the beauty industry that you can rely on</p>
                    <div class="page_nav">
                        <span>You are here:</span> <a href="{{ URL::to('/') }}">Home</a> <span><i
                                class="fa fa-angle-double-right"></i>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Contact Deatils -->
    <section id="contact" class="padding">
        <div class="container">
            <div class="row padding-bottom">
                <div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="500ms">
                    <h2 class="heading heading_space">Get in Touch <span class="divider-left"></span></h2>
                    <p class="text-justify">
                        Connect with NTA for any queries regarding beauty related courses that we offer.
                    </p>
                    <div class="address">
                        <i class="icon icon-map-pin border_radius"></i>
                        <h4>Visit Us</h4>
                        <p>Level 1, 7 Greenfield Pde Bankstown, NSW 2200, Sydney, Australia</p>
                    </div>
                    <div class="address">
                        <i class="icon icon-mail border_radius"></i>
                        <h4>Email Us</h4>
                        <p><a href="mailto:enquiries@nta.nsw.edu.au">enquiries@nta.nsw.edu.au</a></p>
                    </div>
                    <div class="address">
                        <i class="icon icon-phone4 border_radius"></i>
                        <h4>Call Us</h4>
                        <p>1300 616 123</p>
                    </div>
                    <ul class="social_icon black top30">
                        <li><a href="https://www.facebook.com/NTA.Australia/" class="facebook" target="blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/nta_2020)" class="twitter" target="blank"><i
                                    class="icon-twitter4"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCLmvHOEVNr3iG1il_HeXPsg" class="dribble"><i
                                    class="fa fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/noble_training_academy/" class="instagram" target="blank"><i
                                    class="icon-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-8 wow fadeInRight" data-wow-delay="600ms">
                    <h2 class="heading heading_space">How Can We Help?<span class="divider-left"></span></h2>
                    <form class="form-inline findus" id="contact-form" method="POST" action="{{ route('contactus') }}">
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
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email"
                                        required>
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
                                <button type="submit" class="btn_common yellow border_radius"
                                    id="btn_submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Deatils -->

    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.8571739988165!2d151.0320201157464!3d-33.919075329102355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bdd7fc186ca9%3A0x480fa777a641711b!2sNoble%20Training%20Academy%20(RTO%20code%2070201)!5e0!3m2!1sen!2sau!4v1649362660384!5m2!1sen!2sau"
         width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
