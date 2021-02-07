<div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pull-left">
          <span class="info"><i class="icon-phone2"></i>1300 616 123</span>
          <span class="info"><i class="icon-mail"></i>enquiries@nta.nsw.edu.au</span>
          </div>
          <ul class="social_top pull-right">
            <li><a href="https://www.facebook.com/NTA.Australia/" target="blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/nta_2020" target="blank"><i class="icon-twitter4"></i></a></li>
            <li><a href="javascript:void(0)" class="dribble"><i class="icon-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!--Header-->
  <header>
    <nav class="navbar navbar-default navbar-sticky bootsnav">
      <div class="container"> 
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="{{URL::to('/')}}">
          <img src="{{asset('assets/images/logo/nta_logo.png')}}" class="logo logo-scrolled" alt="" style="width: 50px;">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" >Courses</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('diplomaInBeauty')}}">SHB50115 - Diploma in Beauty Therapy</a></li>
                    <li><a href="{{route('diplomaInRemedial')}}">HLT52015 - Diploma in Remedial Massage</a></li>
                    <li><a href="{{route('hairdressing')}}">SHB30416 - Certificate III in Hairdressing</a></li>
                    <li><a href="{{route('beautyTherapy')}}">SHB40115 - Certificate IV in Beauty Therapy</a></li>
                  </ul>
                </li>
                <li><a href="{{route('blogs')}}">Blogs</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" >Policies & Forms</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('policyFile', 'CF005-Complaints-_-Appeals')}}">Complaints and Appeals</a></li>
                    <li><a href="{{route('policyFile', 'Complaint-and-appeal-policy')}}">Complaints and Appeals Policy and Procedure</a></li>
                    <li><a href="{{route('policyFile', 'Fees-Charges-and-Refund-Policy')}}"> Fees, Charges and Refund Policy and Procedure</a></li>
                    <li><a href="{{route('policyFile', 'Student-Handbook-2019')}}">Students Handbook</a></li>
                  </ul>
                </li>
                <li><a href="http://elearning.nta.nsw.edu.au/login/index.php" target="blank">E-Learning</a></li>
            </ul>
        </div>
      </div>   
    </nav>
  </header>