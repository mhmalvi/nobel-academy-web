<!--Header-->
<header>
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav pushy">
        <div class="container" style="padding: 5px 0px;">
            <div id="menu_bars" class="right visible-xs-block" style="padding-right: 40px;">
                <span class="t1"></span>
                <span class="t2"></span>
                <span class="t3"></span>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ URL::to('/') }}" style="padding: 0px !important;">
                    <img src="{{ asset('assets/images/logo/nta_logo.png') }}" alt="logo" class="logo logo-display"
                        style="width: 250px;">
                    <img src="{{ asset('assets/images/logo/nta_logo.png') }}" class="logo logo-scrolled" alt=""
                        style="width: 150px;">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut"
                    style="padding: 5px 0px;">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('diplomaInBeauty') }}">SHB50115 - Diploma in Beauty Therapy</a></li>
                            <li><a href="{{ route('diplomaInRemedial') }}">HLT52015 - Diploma in Remedial Massage</a>
                            </li>
                            <li><a href="{{ route('hairdressing') }}">SHB30416 - Certificate III in Hairdressing</a>
                            </li>
                            <li><a href="{{ route('beautyTherapy') }}">SHB40115 - Certificate IV in Beauty Therapy</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('faq') }}">FAQs</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Policies & Forms</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('policyFile', 'CF005-Complaints-_-Appeals') }}">Complaints and
                                    Appeals</a></li>
                            <li><a href="{{ route('policyFile', 'Complaint-and-appeal-policy') }}">Complaints and
                                    Appeals Policy and Procedure</a></li>
                            <li><a href="{{ route('policyFile', 'Fees-Charges-and-Refund-Policy') }}"> Fees, Charges
                                    and Refund Policy and Procedure</a></li>
                            <li><a href="{{ route('policyFile', 'Student-Handbook-2019') }}">Students Handbook</a></li>
                            <li><a href="{{ route('check-your-rpl-eligibility') }}">Check Your Eligibility</a></li>
                        </ul>
                    </li>
                    <li><a href="http://elearning.nta.nsw.edu.au/login/index.php">E-Learning</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar_menu visible-xs-block">
            <nav class="pushmenu pushmenu-right">
                <a class="push-logo" href="{{ URL::to('/') }}"><img
                        src="{{ asset('assets/images/logo/nta_logo.png') }}" alt="logo" style="max-width: 85px;"></a>
                <ul class="push_nav centered">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="dropdown clearfix">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">courses</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('diplomaInBeauty') }}">SHB50115 - Diploma in Beauty Therapy</a></li>
                            <li><a href="{{ route('diplomaInRemedial') }}">HLT52015 - Diploma in Remedial Massage</a>
                            </li>
                            <li><a href="{{ route('hairdressing') }}">SHB30416 - Certificate III in Hairdressing</a>
                            </li>
                            <li><a href="{{ route('beautyTherapy') }}">SHB40115 - Certificate IV in Beauty Therapy</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blogs') }}">Blogs</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Policies & Forms</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('policyFile', 'CF005-Complaints-_-Appeals') }}">Complaints and
                                    Appeals</a></li>
                            <li><a href="{{ route('policyFile', 'Complaint-and-appeal-policy') }}">Complaints and
                                    Appeals Policy and Procedure</a></li>
                            <li><a href="{{ route('policyFile', 'Fees-Charges-and-Refund-Policy') }}"> Fees, Charges
                                    and Refund Policy and Procedure</a></li>
                            <li><a href="{{ route('policyFile', 'Student-Handbook-2019') }}">Students Handbook</a></li>
                            <li><a href="{{ route('check-your-rpl-eligibility') }}">Check Your Eligibility</a></li>
                        </ul>
                    </li>
                    <li><a href="http://elearning.nta.nsw.edu.au/login/index.php" target="blank">E-Learning</a></li>
                </ul>
                <div class="clearfix"></div>
                <ul class="social_icon black top25 bottom20">
                    <li><a href="https://www.facebook.com/NTA.Australia/" class="facebook" target="blank"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/nta_2020)" class="twitter" target="blank"><i
                                class="icon-twitter4"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCLmvHOEVNr3iG1il_HeXPsg" class="dribble"><i
                                class="fa fa-youtube"></i></a></li>
                    <li><a href="https://www.instagram.com/noble_training_academy/" class="instagram" target="blank"><i
                                class="icon-instagram"></i></a></li>
                </ul>
            </nav>
        </div>
    </nav>
</header>
