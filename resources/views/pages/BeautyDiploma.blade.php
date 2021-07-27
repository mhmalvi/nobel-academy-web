@extends('layouts.app')
@section('title', 'Diploma of Beauty Therapy')
@section('content')
    <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1 style="color: #fff;">SHB50115 - Diploma of Beauty Therapy</h1>
                    <div class="page_nav">
                        <span>You are here:</span> <a href="{{ URL::to('/') }}">Home</a> <span><i
                                class="fa fa-angle-double-right"></i>Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header-->


    <!-- Courses -->
    <section id="course_all" class="padding-bottom-half padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 course_detail wow fadeIn" data-wow-delay="400ms">
                    <img src="{{ asset('assets/images/courses/course01.jpg') }}" alt="Course"
                        class=" border_radius img-responsive bottom15">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="top30 bottom20">Qualification for Beauty Therapy Course</h2>
                            <p class="bottom25 text-justify">
                                The beauty therapy industry is currently experiencing very strong growth. According to the
                                Australian Government's Career Outlook service, with about 25,000 job openings anticipated
                                over the next five years. Employers seek skilled applicants that are dependable,
                                well-presented, and have good interpersonal skills.
                            </p>
                            <p class="bottom25 text-justify">
                                This qualification reflects the role of individuals employed as beauty therapists to provide
                                a broad range of beauty therapy treatments and services including facial treatments, body
                                massage and treatments, hair removal, lash and brow treatments, nail and make-up services.
                                This includes consultation with clients to provide beauty advice, recommend beauty
                                treatments and services, and sell retail skin-care and cosmetic products.
                            </p>
                            <p class="bottom25 text-justify">
                                These individuals work relatively autonomously, and are accountable for personal outputs.
                                Their work involves the self-directed application of knowledge and skills with substantial
                                depth in some areas where judgement is required in planning and selecting appropriate
                                equipment, services and techniques. Work is typically conducted in beauty salons and spas.
                                No occupational licensing, certification or specific legislative requirements apply to this
                                qualification at the time of publication. You'll be led by an experienced team of experts
                                who understand the industry and its requirements.
                            </p>
                            <br>
                            <p>
                                <strong>Entry and Enrolment Process:</strong>
                            </p>
                            <br>
                            <p class="bottom25 text-justify">
                                All prospective students are required to participate in an interview with the Course Career
                                Advisor or the Education Manager. The interview may be in person or via the phone/skype. The
                                information obtained from the interview and the outcome of the test report will be assessed
                                by the Education Manager for the suitability & capacity to undertake the course.
                            </p>
                        </div>
                    </div>
                    <div class="bottom15"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="top30 bottom20">Packaging Rules</h2>
                            <p class="bottom25">
                            <p>13 core units</p>
                            <p>12 elective units, consisting of all units from Group A, B, or C:</p>
                            <p><strong>Group A</strong> – Electrolysis/Diathermy</p>
                            <p><strong>Group B</strong> – Relaxation Massage</p>
                            <p><strong>Group C</strong> – Spa Treatments</p>
                            <p>remaining units from Group D - General Electives, elsewhere in SHB Training Package, or any other current training package or accredited course.</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="d-flex">
                        <button type="button" class="btn_common yellow border_radius" data-toggle="modal"
                            data-target="#applyNow"
                            onclick="event.preventDefault(); applyNow('Diploma of Beauty Therapy');">Apply Now</button>
                    </div>
                    <br />
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget heading_space">
                                <h3 class="bottom20">Frequently Ask Questions</h3>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#faqA" aria-expanded="false" aria-controls="faqA">
                                                What is the time of admission for Beauty therapy course?
                                            </h4>
                                        </div>
                                        <div id="faqA" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>
                                                    This course has more than one intake each Semester and you will commence
                                                    at the next available intake.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#faqB" aria-expanded="false"
                                                    aria-controls="faqB">
                                                    What will you learn?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faqB" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <ol>
                                                    <li class="nta_course">
                                                        Consult with clients and provide quality salon services
                                                    </li>
                                                    <li class="nta_course">
                                                        Apply a solid understanding of skin biology, anatomy, and physiology
                                                        of major body systems to designing appropriate therapies for the
                                                        client's skin type and skin conditions.
                                                    </li>
                                                    <li class="nta_course">
                                                        Perform a variety of body treatments using the most up-to-date
                                                        equipment and massage techniques such as Swedish, lymphatic, and
                                                        stone massage.

                                                    </li>
                                                    <li class="nta_course">
                                                        Safely and successfully perform specialized specialist treatments
                                                        such as electrolysis and diathermy.
                                                    </li>
                                                    <li class="nta_course">
                                                        Aromatherapy massage and various beauty treatments include the
                                                        mixing and application of a variety of aromatherapy oils.
                                                    </li>
                                                    <li class="nta_course">
                                                        Perform a variety of advanced waxing procedures in a hygienic and
                                                        painless manner for the customer.
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#faqC" aria-expanded="false"
                                                    aria-controls="faqC">
                                                    What is the Employment Outcomes of this course?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faqC" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>
                                                    This certification represents the role of beauty therapists in providing
                                                    a wide variety of treatments and facilities, such as facial treatments,
                                                    body massage and treatments, hair removal, lash and brow treatments,
                                                    nail and make-up services.
                                                    This involves meeting with clients to give them beauty tips and suggest
                                                    treatments and services. You will also be able to sell retail skin-care
                                                    and cosmetic products.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#faqD" aria-expanded="false"
                                                    aria-controls="D">
                                                    What you need to know about studying as an International student?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faqD" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>
                                                    You'll study face-to-face in a classroom with other foreign and
                                                    Australian students at one of our campus locations as an international
                                                    student. You will be expected to complete additional research on your
                                                    own time in addition to your regular class hours. The price mentioned is
                                                    for foreign students on a student visa.
                                                    If you're visiting Australia on a non-student visa, please contact us
                                                    directly for the price applicable to you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-sm-4 wow fadeIn" data-wow-delay="400ms">
                    <div class="widget heading_space">
                        <button type="button" class="rpl-btn rpl-btn-default" data-toggle="rpl-modal" id="toggle-modal">
                            <lord-icon
                                src="https://cdn.lordicon.com//pndvzexs.json"
                                trigger="loop"
                                colors="primary:#002B46,secondary:#002B46"
                                class="lord-icon-size">
                            </lord-icon>
                            Click Here For Your Free Skill Check
                        </button>
                        <h3 class="bottom20">Core units</h3>
                        <div class="media">
                            <div class="media-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBBBOS002</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Provide body massages</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBBBOS003</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Provide body treatments</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBBFAS001</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Provide lash and brow services</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBBFAS002</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Provide facial treatments and skin care recommendations</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBBFAS003</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Provide specialised facial treatments</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBBHRS001</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Provide waxing services</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBBMUP002</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Design and apply make-up</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBBNLS001 </p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Provide manicure and pedicare services</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBBRES001</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Research and apply beauty industry information</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBXCCS001</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Conduct salon financial transactions</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBXCCS002 </p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Provide salon services to clients</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBXIND001</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Comply with organisational requirements within a personal services
                                                    environment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle;">
                                                <p>SHBXWHS001</p>
                                            </td>
                                            <td style="vertical-align:middle;">
                                                <p>Apply safe hygiene, health and work practices</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="widget heading_space">
                        <h3 class="bottom20">Elective units</h3>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#A" aria-expanded="false" aria-controls="A">
                                        Group A – Electrolysis/Diathermy
                                    </h4>
                                </div>
                                <div id="A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="nta_course"><strong>SHBBHRS004</strong> - Provide hair reduction
                                                treatments using electrical currents</li>
                                            <li class="nta_course"><strong>SHBBINF001</strong> - Maintain infection control
                                                standards</li>
                                            <li class="nta_course"><strong>SHBBSKS002</strong> - Provide diathermy
                                                treatments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#B" aria-expanded="false" aria-controls="B">
                                            Group B – Relaxation Massage
                                        </a>
                                    </h4>
                                </div>
                                <div id="B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="nta_course"><strong>SHBBBOS004</strong> - Provide aromatherapy
                                                massages</li>
                                            <li class="nta_course"><strong>SHBBBOS005</strong> - Use reflexology relaxation
                                                techniques in beauty treatments</li>
                                            <li class="nta_course"><strong>SHBBCCS002</strong> - Prepare personalised
                                                aromatic plant oil blends for beauty treatments</li>
                                            <li class="nta_course"><strong>SHBBSPA003</strong> - Provide stone therapy
                                                massages</li>
                                            <li class="nta_course"><strong>SHBBSPA004</strong> - Provide Indian head
                                                massages for relaxation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#C" aria-expanded="false" aria-controls="C">
                                            Group C – Spa Treatments
                                        </a>
                                    </h4>
                                </div>
                                <div id="C" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li><strong>SHBBBOS004</strong> - Provide aromatherapy massages</li>
                                            <li><strong>SHBBCCS002</strong> - Prepare personalised aromatic plant oil blends
                                                for beauty treatments</li>
                                            <li><strong>SHBBSPA001</strong> - Work in a spa therapies framework</li>
                                            <li><strong>SHBBSPA002</strong> - Provide spa therapies</li>
                                            <li><strong>SHBBSPA003</strong> - Provide stone therapy massages</li>
                                            <li><strong>SHBBSPA004</strong> - Provide Indian head massages for relaxation
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#D" aria-expanded="false" aria-controls="D">
                                            Group D - General electives
                                        </a>
                                    </h4>
                                </div>
                                <div id="D" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li><strong>BSBSMB304</strong> - Determine resource requirements for the micro
                                                business</li>
                                            <li><strong>BSBSMB403</strong> -
                                                Market the small business</li>
                                            <li><strong>BSBSMB404</strong> -
                                                Undertake small business planning</li>
                                            <li><strong>BSBSMB405</strong> - Monitor and manage small business operations
                                            </li>
                                            <li><strong>BSBSMB406</strong> - Manage small business finances</li>
                                            <li><strong>SHBBBOS004</strong> - Provide aromatherapy massages

                                            </li>
                                            <li><strong>SHBBBOS005</strong> -
                                                Use reflexology relaxation techniques in beauty treatments</li>
                                            <li><strong>SHBBBOS006</strong> -
                                                Provide superficial lymph massage treatments</li>
                                            <li><strong>SHBBCCS002</strong> -
                                                Prepare personalised aromatic plant oil blends for beauty treatments</li>
                                            <li><strong>SHBBHRS002</strong> -
                                                Provide female intimate waxing services</li>
                                            <li><strong>SHBBHRS003</strong> - Provide male intimate waxing services

                                            </li>
                                            <li><strong>SHBBINF001</strong> - Maintain infection control standards

                                            </li>
                                            <li><strong>SHBBMUP003</strong> -
                                                Design and apply make-up for photography</li>
                                            <li><strong>SHBBMUP004</strong> -
                                                Design and apply remedial camouflage make-upn</li>
                                            <li><strong>SHBBSKS002</strong> -
                                                Provide diathermy treatments</li>
                                            <li><strong>SHBBSKS003</strong> - Design and provide cosmetic tattooing

                                            </li>
                                            <li><strong>SHBBSKS004</strong> - Provide upper body piercing

                                            </li>
                                            <li><strong>SHBBSKS005</strong> -
                                                Provide micro-dermabrasion treatments</li>
                                            <li><strong>SHBBSPA001</strong> - Work in a spa therapies framework</li>
                                            <li><strong>SHBBSPA002</strong> - Provide spa therapies</li>
                                            <li><strong>SHBBSPA003</strong> - Provide stone therapy massages</li>
                                            <li><strong>SHBBSPA004</strong> - Provide Indian head massages for relaxation

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- Courses -->
@endsection