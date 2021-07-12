@extends('layouts.app')
@push('seo')
    <meta name="description"
        content="With this hairdressing course certification, you can get started on your way to a promising career in hairdressing. Which will help you to work as a hairdresser in a salon with confidence" />
@endpush
@section('content')
    <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1 style="color: #fff;">SHB30416 - Certificate III in Hairdressing</h1>
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
                    <img src="{{ asset('assets/images/courses/course03.jpg') }}" alt="Course"
                        class=" border_radius img-responsive bottom15">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="top30 bottom20">Qualification for Hair Dressing Course</h2>
                            <p class="bottom25 text-justify">
                                Hairdressing skills are in high demand, according to the Australian Government's Job Outlook
                                service, with employers finding it difficult to fill vacancies. Over the next five years,
                                the industry is projected to expand at a rapid pace, with more than 31,000 job openings.
                            </p>
                            <p class="bottom25 text-justify">
                                Learn how to color and lighten hair, provide shampoo and basin services, and design and cut
                                hair in a modern salon environment. Much of this will take place in a classroom setting as
                                well as in a real-world technical salon setting.
                            </p>
                            <p class="bottom25 text-justify">

                                After completing this course, you will have everything you need to confidently pursue jobs
                                in the hairdressing industry. This qualification reflects the role of hairdressers who use a
                                range of well-developed sales, consultation and technical skills and knowledge to provide a
                                broad range of hairdressing services to clients. They use discretion and judgement to
                                provide clientservices and take responsibility for the outcomes of their own work.
                            </p>
                            <p class="bottom25 text-justify">
                                This qualification provides a pathway to work as a hairdresser in any industry environment,
                                usually a salon. No occupational licensing, certification or specific legislative
                                requirements apply to this qualification at the time of publication.
                            </p>
                            <p class="bottom25 text-justify">
                                Our hairdressing courses will prepare you to provide a full range of client services to both
                                male and female customers, including consultation and guidance, hair and scalp treatments,
                                haircutting, hair design, and lightening. In our purpose-built facilities, you'll have
                                direct contact with real clients and use high-quality products, giving you everything you
                                need to start your hairdressing career.
                            </p>
                            <br>
                            <div>
                                <p><strong>Learn New Skills</strong></p>
                                <p>Through your on-the-job experience and course work, you will learn:</p>
                                <p>- Ways to unleash your creative skills on women's and men's hair</p>
                                <p>- Cutting methods and techniques</p>
                                <p>- About colours and application techniques</p>
                                <p>- To create special occasion and classic up-styles</p>
                                <p>- Design haircut structures</p>
                            </div>
                            <br>
                            <div>
                                <p><strong>Develop your talent</strong></p>
                                <p>Develop the personal qualities and abilities that will help you advance in this field:</p>
                                <p>- Communication skills to connect with clients</p>
                                <p>- Skills in customer care, teamwork, and consultation</p>
                                <p>- To meet client needs, problem-solving techniques are used.</p>
                                <p>- Explore and develop your creative abilities.</p>
                            </div>
                            <br>
                            <p><strong>Entry requirements</strong></p>
                            <br>
                            <p>There are no formal entry requirements for this course.</p>
                        </div>
                    </div>
                    <div class="bottom15"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="top30 bottom20">Packaging Rules</h2>
                            <p>28 units must be completed:</p>
                            <p>- 21 core units</p>
                            <p>- 7 electives consisting of</p>
                            <p>- all 3 units from Group A or all 3 units from Group B</p>
                            <p>- 4 units from Group C.</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="d-flex">
                        <button type="button" class="btn_common yellow border_radius" data-toggle="modal"
                            data-target="#applyNow"
                            onclick="event.preventDefault(); applyNow('Certificate III in Hairdressing');">Apply
                            Now</button>
                    </div>
                    <br>
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
                                                    What is the Professional Outcomes of this course?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faqB" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>
                                                    Completing this course will equip you with:
                                                </p>
                                                <ul>
                                                    <li>Skills to work effectively in a salon environment as an apprentice
                                                    </li>
                                                    <li>A trade qualification</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#faqc" aria-expanded="false"
                                                    aria-controls="faqc">
                                                    What is the Employment Outcomes of this course?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faqc" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>
                                                    Hairdressing courses at NTA train you for work as a hairdresser
                                                    apprentice, barber, salon assistant, or salon owner. You'll learn how to
                                                    cut, barber, style, perm, straighten, and color hair, among other
                                                    things. Complex color correction, hair extensions, chemical reformation,
                                                    and trichology are examples of advanced skills. Our professional salons
                                                    give you experience with real customers in a well-equipped facility.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#faqD" aria-expanded="false"
                                                    aria-controls="faqD">
                                                    What you need to know about studying as an International student
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="faqD" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>
                                                    As an international student, you'll study in a classroom with other
                                                    international and Australian students at one of our campus locations. In
                                                    addition to your usual class hours, you will be expected to do
                                                    additional research on your own time. The price is for international
                                                    students on a student visa. If you're visiting Australia on a
                                                    non-student visa, please contact us directly for the price applicable to
                                                    you.
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
                                            <td style="vertical-align:middle">
                                                <p>BSBSUS201</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Participate in environmentally sustainable work practices</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHBAS001</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Provide shampoo and basin services</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHCLS002</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Colour and lighten hair</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHCLS003</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Provide full and partial head highlighting treatments</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHCLS004</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Neutralise unwanted colours and tones</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHCLS005</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Provide on scalp full head and retouch bleach treatments</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHCUT001</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Design haircut structures</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHCUT002</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Create one length or solid haircut structures</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHCUT003</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Create graduated haircut structures</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHCUT004</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Create layered haircut structures</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHCUT005</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Cut hair using over-comb techniques</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHDES003</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Create finished hair designs</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHIND001</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Maintain and organise tools, equipment and work areas</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHIND003</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Develop and expand a client base</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHREF002</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Straighten and relax hair with chemical treatments</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBHTRI001</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Identify and treat hair and scalp conditions</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBXCCS001</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Conduct salon financial transactions</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBXCCS002</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Provide salon services to clients</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBXIND001</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Comply with organisational requirements within a personal services
                                                    environment</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBXIND002</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Communicate as part of a salon team</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <p>SHBXWHS001</p>
                                            </td>
                                            <td style="vertical-align:middle">
                                                <p>Apply safe hygiene, health and work practices</p>
                                            </td>
                                        </tr>
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
                                        Group A – General Hairdressing
                                    </h4>
                                </div>
                                <div id="A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="nta_course"><strong>SHBHCUT006</strong> - Create combined haircut
                                                structures</li>
                                            <li class="nta_course"><strong>SHBHCUT007</strong> - Create combined traditional
                                                and classic men’s haircut structures</li>
                                            <li class="nta_course"><strong>SHBHDES004</strong> - Create classic long hair
                                                up-styles</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#B" aria-expanded="false" aria-controls="B">
                                            Group B – Men’s Hairdressing
                                        </a>
                                    </h4>
                                </div>
                                <div id="B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="nta_course"><strong>SHBHCUT007</strong> - Create combined traditional
                                                and classic men’s haircut structures</li>
                                            <li class="nta_course"><strong>SHBHCUT011</strong> - Design and maintain beards
                                                and moustaches</li>
                                            <li class="nta_course"><strong>SHBHCUT012</strong> - Shave heads and faces</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#C" aria-expanded="false" aria-controls="C">
                                            Group C- General Electives
                                        </a>
                                    </h4>
                                </div>
                                <div id="C" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="nta_course"><strong>SHBHBAS002</strong> - Provide head, neck and
                                                shoulder massages for relaxation</li>
                                            <li class="nta_course"><strong>SHBHCCS001</strong> - Plan hair services for
                                                special events</li>
                                            <li class="nta_course"><strong>SHBHCUT006</strong> - Create combined haircut
                                                structures</li>
                                            <li class="nta_course"><strong>SHBHCUT011</strong> - Design and maintain beards
                                                and moustaches</li>
                                            <li class="nta_course"><strong>SHBHCUT012</strong> - Shave heads and faces</li>
                                            <li class="nta_course"><strong>SHBHDES002</strong> - Braid hair</li>
                                            <li class="nta_course"><strong>SHBHDES004</strong> - Create classic long hair
                                                up-styles</li>
                                            <li class="nta_course"><strong>SHBHDES005</strong> - Select and apply hair
                                                extensions</li>
                                            <li class="nta_course"><strong>SHBHCUT006</strong> - Create combined haircut
                                                structures</li>
                                            <li class="nta_course"><strong>SHBHIND002</strong> - Research and use
                                                hairdressing industry information</li>
                                            <li class="nta_course"><strong>SHBHIND004</strong> - Participate in session
                                                styling teams</li>
                                            <li class="nta_course"><strong>SHBHREF001</strong> - Curl and volumise hair with
                                                chemical treatments</li>
                                            <li class="nta_course"><strong>SHBHREF003</strong> - Straighten and relax hair
                                                with protein treatments</li>
                                            <li class="nta_course"><strong>SHBXCCS004</strong> - Recommend products and
                                                services</li>
                                            <li class="nta_course"><strong>SIRRINV001</strong> - Receive and handle retail
                                                stock</li>
                                            <li class="nta_course"><strong>SIRRMER001</strong> - Produce visual merchandise
                                                displays</li>
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
