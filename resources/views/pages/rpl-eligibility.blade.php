@extends('layouts.app')

@section('title', 'Check you eligibility for RPL')

@section('content')
    <div class="container">
        <div class="form-wrapper">
            <div class="row">
                <div class="col-md-8">
                    <form method="post" id="rplEligibilityForm">
                        <div class="box">
                            <div class="box-header">
                                <h3>
                                    <strong>1</strong>
                                    Qualification
                                </h3>
                                <br>
                                <p>Choose the qualification you are looking for.</p>
                            </div>
                            <div class="box-content">
                                <div class="form-group">
                                    <label for="qualification">What qualification are you looking for? *</label>
                                    <select class="form-control" id="qualification">
                                        <option value>Select the qualification you looking for...</option>
                                        <option value="SHB50115 - Diploma of Beauty Therapy">SHB50115 - Diploma of Beauty Therapy</option>
                                        <option value="HLT52015 - Diploma of Remedial Massage">HLT52015 - Diploma of Remedial Massage</option>
                                        <option value="SHB30416 - Certificate III in Hairdressing">SHB30416 - Certificate III in Hairdressing</option>
                                        <option value="SHB40115 - Certificate IV in Beauty Therapy">SHB40115 - Certificate IV in Beauty Therapy</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h3>
                                    <strong>2</strong>
                                    Professional Experience
                                </h3>
                                <br>
                                <p>Describe your profession experience.</p>
                            </div>
                            <div class="box-content">
                                <div class="form-card form-group">
                                    <div class="radio p-0">
                                        <label for="" class="p-0">How many years of relevant work experience do you have? *</label>
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-6">
                                                <input type="radio" name="relevant" id="one" value="1 - 2 years"/>
                                                <label for="one" class="exp-lbl exp-lbl2">
                                                    <div>1 - 2 <br> Years</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <input type="radio" name="relevant" id="two" value="3 - 4 years">
                                                <label for="two" class="exp-lbl exp-lbl2">
                                                    <div>3 - 4 <br> Years</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <input type="radio" name="relevant" id="three" value="5 - 9 years">
                                                <label for="three" class="exp-lbl exp-lbl2">
                                                    <div>5 - 9 <br> Years</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <input type="radio" name="relevant" id="four" value="10 + years">
                                                <label for="four" class="exp-lbl exp-lbl2">
                                                    <div>10 + <br> Years</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="radio p-0">
                                        <label class="p-0">Where is your work experience? *</label>
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <input type="radio" name="work_location" id="wlOne" value="australia" />
                                                <label for="wlOne" class="exp-lbl exp-lbl2">
                                                    <div>Australia</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <input type="radio" name="work_location" id="wlTwo" value="overseas">
                                                <label for="wlTwo" class="exp-lbl exp-lbl2">
                                                    <div>Overseas</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <input type="radio" name="work_location" id="wlThree" value="other">
                                                <label for="wlThree" class="exp-lbl exp-lbl2">
                                                    <div>Other</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h3>
                                    <strong>3</strong>
                                    Your Address
                                </h3>
                                <br>
                                <p>Please select where do you live in.</p>
                            </div>
                            <div class="box-content">
                                <div class="form-card form-group">
                                    <div class="radio p-0">
                                        <label class="p-0">What state do you live in? *</label>
                                        <div class="row">
                                            <div class="col-sm-3 col-6 col-xs-6">
                                                <input type="radio" name="location" id="locOne" value="NSW" />
                                                <label for="locOne" class="exp-lbl exp-lbl2 p-1">
                                                    <img src="{{asset('assets/images/maps/01.png')}}" alt="nsw">
                                                    <div>NSW</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-3 col-6 col-xs-6">
                                                <input type="radio" name="location" id="locTwo" value="VIC">
                                                <label for="locTwo" class="exp-lbl exp-lbl2 p-1">
                                                    <img src="{{asset('assets/images/maps/02.png')}}" alt="vic">
                                                    <div>VIC</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-3 col-6 col-xs-6">
                                                <input type="radio" name="location" id="locThree" value="QLD">
                                                <label for="locThree" class="exp-lbl exp-lbl2 p-1">
                                                    <img src="{{asset('assets/images/maps/03.png')}}" alt="qld">
                                                    <div>QLDs</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-3 col-6 col-xs-6">
                                                <input type="radio" name="location" id="locFour" value="SA">
                                                <label for="locFour" class="exp-lbl exp-lbl2 p-1">
                                                    <img src="{{asset('assets/images/maps/04.png')}}" alt="sa">
                                                    <div>SA</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row pt-sm-5">
                                            <div class="col-sm-3 col-6 col-xs-6">
                                                <input type="radio" name="location" id="locFive" value="WA" />
                                                <label for="locFive" class="exp-lbl exp-lbl2 p-1">
                                                    <img src="{{asset('assets/images/maps/05.png')}}" alt="wa">
                                                    <div>WA</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-3 col-6 col-xs-6">
                                                <input type="radio" name="location" id="locSix" value="ACT">
                                                <label for="locSix" class="exp-lbl exp-lbl2 p-1">
                                                    <img src="{{asset('assets/images/maps/06.png')}}" alt="act">
                                                    <div>ACT</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-3 col-6 col-xs-6">
                                                <input type="radio" name="location" id="locSeven" value="NT">
                                                <label for="locSeven" class="exp-lbl exp-lbl2 p-1">
                                                    <img src="{{asset('assets/images/maps/07.png')}}" alt="nt">
                                                    <div>NT</div>
                                                </label>
                                            </div>
                                            <div class="col-sm-3 col-6 col-xs-6">
                                                <input type="radio" name="location" id="locEight" value="TAS">
                                                <label for="locEight" class="exp-lbl exp-lbl2 p-1">
                                                    <img src="{{asset('assets/images/maps/08.png')}}" alt="tas">
                                                    <div>TAS</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h3>
                                    <strong>4</strong>
                                    Personal Information
                                </h3>
                                <br>
                                <p>Please enter your personal information</p>
                            </div>
                            <div class="box-content">
                                <div class=" form-group">
                                    <label for="name">Full Name *</label>
                                    <input type="text" id="name" class="form-control" placeholder="Please enter your full name">
                                </div>
                                <div class=" form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" class="form-control" placeholder="example@email.com" >
                                </div>
                                <div class=" form-group"> 
                                    <label for="phone">Contact Number *</label>
                                    <input type="text" id="phone" class="form-control" placeholder="Enter your contact number" >
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h3>
                                    <strong>5</strong>
                                    Miscellaneous
                                </h3>
                                <br>
                                <p>Tell us more about you.</p>
                            </div>
                            <div class="box-content">
                                <div class="form-group">
                                    <label for="remark">Remarks:</label>
                                    <textarea id="remark" class="form-control" rows="5" placeholder="Do you have any query?"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="fieldlabels filesLbl filesLbl2" for="files" id="filesLbl">Upload your documents</label>
                                    <input type="file" class="form-control files" id="files" onchange="fileUpload(event)" multiple/>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="button-rpl">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="info-box">
                            <div>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <h4>Address</h4>
                            <p>Level 1, 7 Greenfield Pde Bankstown, NSW 2200, Sydney, Australia</p>
                        </div>
                        <div class="info-box">
                            <div>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <h4>Email</h4>
                            <p>enquiries@nta.nsw.edu.au</p>
                        </div>
                        <div class="info-box">
                            <div>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <h4>Telephone</h4>
                            <p>1300 616 123</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="loader-wrapper" id="lds-wrapper"area-hidden='true'>
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
@endsection
