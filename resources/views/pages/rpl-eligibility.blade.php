@extends('layouts.app')

@section('title', 'Check you eligibility for RPL')

@section('content')
<div class="container">
    <div class="row" id="alert" style="display: none; margin-top: 30px; margin-bottom: 3px;">
        <div class="col-md-12">
            <div class="alert alert-success" id="alert-success"></div>
        </div>
    </div>
    <div class="form-wrapper">
        <form action="" id="rplForm" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>1</strong>
                                Qualification
                            </h3>
                            <br />
                            <p>Choose the qualification you are looking for.</p>
                        </div>
                        <div class="box-content">
                            <div class="form-group">
                                <label for="qualification" >What qualification are you looking for? *</label>
                                
                                <select class="form-control" id="qualification" name="qualification">
                                    <option value>
                                        Select the qualification you looking for...
                                    </option>
                                    <option value="SHB50115 - Diploma of Beauty Therapy">
                                        SHB50115 - Diploma of Beauty Therapy
                                    </option>
                                    <option value="HLT52015 - Diploma of Remedial Massage">
                                        HLT52015 - Diploma of Remedial Massage
                                    </option>
                                    <option value="SHB30416 - Certificate III in Hairdressing">
                                        SHB30416 - Certificate III in Hairdressing
                                    </option>
                                    <option value="SHB40115 - Certificate IV in Beauty Therapy">
                                        SHB40115 - Certificate IV in Beauty Therapy
                                    </option>
                                </select>
                                <div class="text-danger" v-if="errors.messages.qualification.length > 0">
                                    {{-- {{ errors.messages.qualification[0] }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>2</strong>
                                Professional Experience
                            </h3>
                            <br />
                            <p>Describe your profession experience.</p>
                        </div>
                        <div class="box-content">
                            <div class="form-card form-group">
                                <div class="radio p-0">
                                    <label for="" class="p-0">How many years of relevant work experience do you have?
                                        *</label>
                                    <div id="experience"></div>
                                    <div class="row">
                                        <div class="col-sm-3 col-xs-6">
                                            <input type="radio" name="experience" id="one" value="1 - 2 years"
                                                 />
                                            <label for="one" class="exp-lbl exp-lbl2">
                                                <div>
                                                    1 - 2 <br />
                                                    Years
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <input type="radio" name="experience" id="two" value="3 - 4 years"
                                                 />
                                            <label for="two" class="exp-lbl exp-lbl2">
                                                <div>
                                                    3 - 4 <br />
                                                    Years
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <input type="radio" name="experience" id="three" value="5 - 9 years"
                                                 />
                                            <label for="three" class="exp-lbl exp-lbl2">
                                                <div>
                                                    5 - 9 <br />
                                                    Years
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <input type="radio" name="experience" id="four" value="10 + years"
                                                 />
                                            <label for="four" class="exp-lbl exp-lbl2">
                                                <div>
                                                    10 + <br />
                                                    Years
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-danger" v-if="errors.messages.experience.length > 0">
                                        {{-- {{ errors.messages.experience[0] }} --}}
                                    </div>
                                </div>
                                <div class="radio p-0">
                                    <label class="p-0">Where is your work experience? *</label>
                                    <div id="work_location"></div>
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="radio" name="work_location" id="wlOne" value="australia"
                                                name="work_location" />
                                            <label for="wlOne" class="exp-lbl exp-lbl2">
                                                <div>Australia</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="radio" name="work_location" id="wlTwo" value="overseas"
                                                name="work_location" />
                                            <label for="wlTwo" class="exp-lbl exp-lbl2">
                                                <div>Overseas</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <input type="radio" name="work_location" id="wlThree" value="other"
                                                name="work_location" />
                                            <label for="wlThree" class="exp-lbl exp-lbl2">
                                                <div>Other</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-danger" v-if="errors.messages.work_location.length > 0">
                                        {{-- {{ errors.messages.work_location[0] }} --}}
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
                            <br />
                            <p>Please select where do you live in.</p>
                        </div>
                        <div class="box-content">
                            <div class="form-card form-group">
                                <div class="radio p-0">
                                    <label class="p-0">What state do you live in? *</label>
                                    <div id="location"></div>
                                    <div class="row">
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locOne" value="NSW"
                                                name="location" />
                                            <label for="locOne" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/01.webp') }}" alt="nsw" />
                                                <div>NSW</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locTwo" value="VIC"
                                                name="location" />
                                            <label for="locTwo" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/02.webp') }}" alt="vic" />
                                                <div>VIC</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locThree" value="QLD"
                                                name="location" />
                                            <label for="locThree" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/03.webp') }}" alt="qld" />
                                                <div>QLDs</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locFour" value="SA"
                                                name="location" />
                                            <label for="locFour" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/04.webp') }}" alt="sa" />
                                                <div>SA</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row pt-sm-5">
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locFive" value="WA"
                                                name="location" />
                                            <label for="locFive" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/05.webp') }}" alt="wa" />
                                                <div>WA</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locSix" value="ACT"
                                                name="location" />
                                            <label for="locSix" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/06.webp') }}" alt="act" />
                                                <div>ACT</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locSeven" value="NT"
                                                name="location" />
                                            <label for="locSeven" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/07.webp') }}" alt="nt" />
                                                <div>NT</div>
                                            </label>
                                        </div>
                                        <div class="col-sm-3 col-6 col-xs-6">
                                            <input type="radio" name="location" id="locEight" value="TAS"
                                                name="location" />
                                            <label for="locEight" class="exp-lbl exp-lbl2 p-1">
                                                <img src="{{ asset('assets/images/maps/08.webp') }}" alt="tas" />
                                                <div>TAS</div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="text-danger" v-if="errors.messages.location.length > 0">
                                        {{-- {{ errors.messages.location[0] }} --}}
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
                            <br />
                            <p>Please enter your personal information</p>
                        </div>
                        <div class="box-content">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" class="form-control"
                                    placeholder="Please enter your full name" name="name" />
                                <div class="text-danger" v-if="errors.messages.name.length > 0">
                                    {{-- {{ errors.messages.name[0] }} --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" class="form-control" placeholder="example@email.com"
                                    name="email" />
                                <div class="text-danger" v-if="errors.messages.email.length > 0">
                                    {{-- {{ errors.messages.email[0] }} --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Contact Number *</label>
                                <input type="text" id="phone" class="form-control"
                                    placeholder="Enter your contact number" name="contact" />
                                <div class="text-danger" v-if="errors.messages.contact.length > 0">
                                    {{-- {{ errors.messages.contact[0] }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>5</strong>
                                Miscellaneous
                            </h3>
                            <br />
                            <p>Tell us more about you.</p>
                        </div>
                        <div class="box-content">
                            <div class="form-group">
                                <label for="remark">Remarks:</label>
                                <textarea id="remark" class="form-control" rows="5" placeholder="Do you have any query?"
                                    name="remark"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="fieldlabels filesLbl filesLbl2" for="files" id="filesLbl">Upload your
                                    documents</label>
                                <input type="file" class="form-control files" id="files" onchange="fileUpload(event)"
                                    multiple />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h3>
                                <strong>6</strong>
                                RPL Checklist
                            </h3>
                            <br />
                            <p>Tick, if you can demonstrate evidence</p>
                        </div>

                        <div class="box-content">
                            <div class="radio">
                                <label class="p-0">
                                    Can you provide referees who can support your RPL Assessment?
                                    <a href="#abc">Information</a> on type of Referees is
                                    explained below.**
                                </label>
                                <div id="q1"></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="radio" name="q1" id="q1_1" value="Yes"/>
                                        <label for="q1_1" class="exp-lbl exp-lbl2">
                                            <div>Yes</div>
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" name="q1" id="q1_2" value="No"/>
                                        <label for="q1_2" class="exp-lbl exp-lbl2">
                                            <div>No</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-danger" v-if="errors.messages.q1.length > 0">
                                    {{-- {{ errors.messages.q1[0] }} --}}
                                </div>
                            </div>

                            <div class="radio">
                                <label class="p-0">
                                    Do you have any past academic qualification you have obtained
                                    in Australia ?
                                </label>
                                <div id="q3"></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="radio" name="q3" id="q3_1" value="Yes"/>
                                        <label for="q3_1" class="exp-lbl exp-lbl2">
                                            <div>Yes</div>
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" name="q3" id="q3_2" value="No"/>
                                        <label for="q3_2" class="exp-lbl exp-lbl2">
                                            <div>No</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-danger" v-if="errors.messages.q3.length > 0">
                                    {{-- {{ errors.messages.q3[0] }} --}}
                                </div>
                            </div>

                            <div class="radio">
                                <label class="p-0">
                                    Do you accept that there will be many different type of
                                    evidences you have to supply for RPL Assessment, will you be
                                    able to supply the documents when requested?
                                </label>
                                <div id="q5"></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="radio" name="q5" id="q5_1" value="Yes"/>
                                        <label for="q5_1" class="exp-lbl exp-lbl2">
                                            <div>Yes</div>
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" name="q5" id="q5_2" value="No"/>
                                        <label for="q5_2" class="exp-lbl exp-lbl2">
                                            <div>No</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-danger" v-if="errors.messages.q5.length > 0">
                                    {{-- {{ errors.messages.q5[0] }} --}}
                                </div>
                            </div>

                            <div class="radio">
                                <label class="p-0">
                                    During the RPL process, we may request you for some video or
                                    photo evidences, are you comfortable in supplying such
                                    evidences?
                                </label>
                                <div id="q6"></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="radio" name="q6" id="q6_1" value="Yes"/>
                                        <label for="q6_1" class="exp-lbl exp-lbl2">
                                            <div>Yes</div>
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" name="q6" id="q6_2" value="No"/>
                                        <label for="q6_2" class="exp-lbl exp-lbl2">
                                            <div>No</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-danger" v-if="errors.messages.q6.length > 0">
                                    {{-- {{ errors.messages.q6[0] }} --}}
                                </div>
                            </div>

                            <div class="radio">
                                <label class="p-0">
                                    Are you ready to fill out the application form and begin the
                                    RPL Assessment immediately?
                                </label>
                                <div id="q8"></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="radio" name="q8" id="q9_1" value="Yes"/>
                                        <label for="q9_1" class="exp-lbl exp-lbl2">
                                            <div>Yes</div>
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="radio" name="q8" id="q9_2" value="No"/>
                                        <label for="q9_2" class="exp-lbl exp-lbl2">
                                            <div>No</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-danger" v-if="errors.messages.q8.length > 0">
                                    {{-- {{ errors.messages.q8[0] }} --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box" id="abc">
                        <div class="box-header">
                            <h3>
                                <strong>*</strong>
                                Type of Referees
                            </h3>
                            <br />
                            <p>
                                Who are eligible Referees that can assess your skill and
                                knowledge?
                            </p>
                        </div>
                        <div class="box-body">
                            <br />
                            <p>
                                For the RPL process an applicant must provide at least three
                                referee details. Out of the three: one of your referee must be a
                                Supervisor at work, who is referred to as ‘Testimonial Referee’
                                and the other two must be ‘Nominated Referees’, whom your
                                Assessor will contact for reference check. One of your Nominated
                                Referee should be able to provide you with ‘Third Party Report'.
                                The detail explanation of the type of referees are given below:
                            </p>
                            <br />
                            <p>
                                <strong>Testimonial Referee:&nbsp;</strong>
                                'Testimonial Referees' are mostly your Employer, Supervisor,
                                Managers who can provide you with a testimonial letter declaring
                                that they know you for more than 1 year and who can declare that
                                you have sufficient job experience to meet the qualification
                                requirements.
                            </p>
                            <br />
                            <p>
                                <strong>Nominated Referee:&nbsp;</strong>
                                You should have two Nominated referee who could either be your
                                colleague, supervisor, manager and other relevant person, who
                                has worked with you and can assess your skill and knowledge in
                                relevance to each unit of competency.
                            </p>
                        </div>
                    </div>
                    <button type="submit" class="button-rpl" id="is_submit_button">Submit</button>
                    <button type="button" class="button-rpl" id="is_spinner" style="display: none;background: #46d6fb;"><i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i><span style="font-size: 
                        18px;">Submitting..</span></button>
                    {{-- <button type="button" class="button-rpl" onclick="createRPL()">Submit</button> --}}
                        
                    
                        <div class="card card-custom" style="width:350px;">
                            <h5 class="card-title card-title-custom">Looking for answer you can't find?</h5>
                            <div class="card-body">
                                <img
                                    src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/000000/external-headphone-devices-icongeek26-linear-colour-icongeek26-1.png" />
                                <p class="card-text">Our expert are always here to help!</p>
                                <p class="card-text card-text-number">1300 616 123</p>
                                <a href="#" class="btn btn-primary btn-primary-custom">Get in touch now!</a>
                            </div>
                        </div>
                   
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
    <script>
        $("#rplForm").on('submit', function(e) {
                    e.preventDefault();

                    $('#is_submit_button').hide()
                    $('#is_spinner').show()

                    var rplForm = document.getElementById("rplForm");
                    var fd      = new FormData(rplForm);

                    // Object.keys(form).forEach((key) => {
                    //     fd.append(key, form[key]);
                    // });

                    var files = $("#files").prop("files");
                    if (files.length > 0) {
                        $.each(files, function (key, value) {
                            fd.append("files[]", value);
                        });
                    }

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    var base_url = window.location.origin;
                    $.ajax({
                        url: base_url + '/check-eligibility',
                        data: fd,
                        cache: false,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function (dataofconfirm) {
                            console.log('dataofconfirm.status', dataofconfirm.success);
                            if (dataofconfirm.success == 'success') {

                                $('#alert').show();
                                $('#alert-success').text('Thank you one of our consultants will be in touch with you soon.');

                                $('#is_submit_button').show()
                                $('#is_spinner').hide()

                                // document.getElementById('rplForm').reset()
                                $('#rplForm').trigger("reset");

                            }
                        },
                        error: function (error) {
                            console.log(error.responseJSON.errors);
                            if(error.status == 422){
                                // this.error = error.response.data.errors
                                $('#is_spinner').hide()
                                $('#is_submit_button').show();
                                $('#is_submit_button').css({'border':'1px solid red'});

                                $.each(error.responseJSON.errors, function(item,index){
                                    let input = jQuery(document).find('input[name="'+item+'"]')
                                    let inputAfter = jQuery(document).find('input[name="'+item+'"] + span')

                                    
                                    if(item == 'experience' | item == 'work_location' | item == 'location' | item == 'qualification' | item == 'q1' | item == 'q3' | item == 'q5' | item == 'q6' | item == 'q8'){

                                        if(item == 'qualification'){
                                            
                                            $('#qualification').after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                        }

                                        if(item == 'experience'){
                                            
                                            $('#experience').after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                        }

                                        if(item == 'location'){
                                            
                                            $('#location').after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                        }

                                        if(item == 'work_location'){
                                            
                                            $('#work_location').after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                        }

                                        if(item == 'q1'){
                                            
                                            $('#q1').after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                        }

                                        if(item == 'q3'){
                                            
                                            $('#q3').after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                        }

                                        if(item == 'q5'){
                                            
                                            $('#q5').after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                        }

                                        if(item == 'q6'){
                                            
                                            $('#q6').after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                        }
                                        
                                        if(item == 'q8'){
                                            
                                            $('#q8').after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                        }
                                        

                                    } else {
                                        
                                    input.addClass('is-invalid')
                                    
                                    inputAfter.remove() 
                                    input.after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                    // Array element 
                                    let inputArr = jQuery(document).find('input[name="'+item+'[]"]')
                                    let inputAfterArr = jQuery(document).find('input[name="'+item+'[]"] + span')

                                    inputArr.addClass('is-invalid')
                                    
                                    inputAfterArr.remove() 
                                    inputArr.after('<span class="text-danger">'+error.responseJSON.errors[item]+'</span>')

                                    } 

                                })    
                            }
                        },
                    });
                });

    </script>

@endpush

@push('css')
    <style>
        .card-custom {
            margin-top: 30px;
            margin-bottom: 20px;
            border: 1px solid #E0E0E0;
            text-align: center;
        }

        .card-title-custom {
            margin-bottom: 0.75rem;
            background: #46D6FB;
            padding: 10px 0px;
            color: #fff;
            font-weight: 900;
        }

        .card-text-number {
            color: #46D6FB;
            font-weight: 900;
        }

        .btn-primary-custom {
            width: 100%;
            background: #46D6FB;
            color: #fff !important;
            font-weight: 700;
            border: none;
        }

    </style>
@endpush
