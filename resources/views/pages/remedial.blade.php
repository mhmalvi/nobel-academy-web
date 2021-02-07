@extends('layouts.app')
@section('content')
    <!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-content">
          <h2 style="color: #fff;">HLT52015 - Diploma of Remedial Massage</h2>
          <div class="page_nav">
        <span>You are here:</span> <a href="{{URL::to('/')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Courses</span>
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
          <img src="{{asset('assets/images/courses/course04.jpg')}}" alt="Course" class=" border_radius img-responsive bottom15">
          <div class="row">
            <div class="col-sm-12">
              <h3 class="top30 bottom20">Qualification Description</h3>
              <p class="bottom25">
                This qualification reflects the role of remedial massage therapists who work with clients presenting with soft tissue dysfunction, musculoskeletal imbalance or restrictions in range of motion (ROM). Practitioners may be self-employed or work within a larger health service.

                To achieve this qualification, the candidate must have completed at least 200 hours of work as detailed in the Assessment Requirements of units of competency.

                No licensing, legislative, regulatory or certification requirements apply to this qualification at the time of publication.
              </p>
            </div>
          </div>
          <div class="bottom15"></div>
          <div class="row">
            <div class="col-sm-12">
              <h3 class="top30 bottom20">Packaging Rules</h3>
              <p class="bottom25">Total number of units = 21</p>
              <ul>
                <li>16 core units</li>
                <li>
                  <span>5 elective units, consisting of:</span>
                  <ul>
                    <li>- at least 1 unit from the Business Management group below</li>
                    <li>- up to 4 units from the electives listed below, any endorsed Training Package or accredited course – these units must be relevant to the work outcome</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>

          <br>
          <br>
          <div class="d-flex">
            <button type="button" class="btn_common yellow border_radius" data-toggle="modal" data-target="#applyNow" onclick="event.preventDefault(); applyNow('Diploma of Remedial Massage');">Apply Now</button>
          </div>

        </div>
        <aside class="col-sm-4 wow fadeIn" data-wow-delay="400ms">
          <div class="widget heading_space">
            <h3 class="bottom20">Core units</h3>
            <div class="media">
              <div class="media-body">
                <table class="table">
                  <tbody><tr>
                    <td style="vertical-align:middle;">
                      <p>CHCCOM006</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Establish and manage client relationships</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>CHCDIV001</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Work with diverse people</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>CHCLEG003</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Manage legal and ethical compliance</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>CHCPRP003</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Reflect on and improve own professional practice</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>CHCPRP005</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Engage with health professionals and the health system</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTAAP003</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Analyse and respond to client health information </p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTAID003</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Provide first aid</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTINF004</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Manage the prevention and control of infection </p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTMSG001</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Develop massage practice</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTMSG002</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Assess client massage needs</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTMSG003</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Perform remedial massage musculoskeletal assessments</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTMSG004</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Provide massage treatments</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTMSG005</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Provide remedial massage treatments</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTMSG006</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Adapt remedial massage practice to meet specific needs</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTMSG008 </p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Monitor and evaluate remedial massage treatments</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle;">
                      <p>HLTWHS004</p>
                    </td>
                    <td style="vertical-align:middle;">
                      <p>Manage work health and safety</p>
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
                  <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#A" aria-expanded="false" aria-controls="A">
                    Business Management
                  </h4>
                </div>
                <div id="A" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <ul>
                      <li class="nta_course"><strong>BSBSMB403</strong> - Market the small business</li>
                      <li class="nta_course"><strong>BSBSMB404</strong> - Undertake small business planning</li>
                      <li class="nta_course"><strong>BSBSMB405</strong> - Monitor and manage small business operations</li>
                      <li class="nta_course"><strong>BSBSMB406</strong> - Manage small business finances</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#B" aria-expanded="false" aria-controls="B">
                      Other electives 
                    </a>
                  </h4>
                </div>
                <div id="B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <ul>
                      <li class="nta_course"><strong>CHCAGE001</strong> - Provide aromatherapy massages</li>
                      <li class="nta_course"><strong>CHCCCS001</strong> - Use reflexology relaxation techniques in beauty treatments</li>
                      <li class="nta_course"><strong>CHCCCS027</strong> - Prepare personalised aromatic plant oil blends for beauty treatments</li>
                      <li class="nta_course"><strong>CHCDIS007</strong> - Provide stone therapy massages</li>
                      <li class="nta_course"><strong>CHCMHS001</strong> - Facilitate the empowerment of people with disability</li>
                      <li class="nta_course"><strong>CHCPOL003</strong> - Work with people with mental health issues</li>
                      <li class="nta_course"><strong>CHCPRP001</strong> - Research and apply evidence to practice</li>
                      <li class="nta_course"><strong>CHCPRP002</strong> - Develop and maintain networks and collaborative partnerships</li>
                      <li class="nta_course"><strong>HLTARO001</strong> - Collaborate in professional practice</li>
                      <li class="nta_course"><strong>HLTARO002</strong> - Develop aromatherapy practice</li>
                      <li class="nta_course"><strong>HLTARO003</strong> - Source and prepare aromatherapy products</li>
                      <li class="nta_course"><strong>HLTARO004</strong> - Perform aromatherapy health assessments</li>
                      <li class="nta_course"><strong>HLTARO005</strong> - Provide therapeutic aromatherapy treatments</li>
                      <li class="nta_course"><strong>HLTHPS010</strong> - Interpret and use information about nutrition and diet</li>
                      <li class="nta_course"><strong>HLTREF002</strong> - Adapt remedial massage practice for athletes</li>
                      <li class="nta_course"><strong>SISFFIT013</strong> - Provide reflexology for relaxation</li>
                      <li class="nta_course"><strong>SISFFIT014</strong> - Instruct exercise to young people aged 13 to 17 years</li>
                      <li class="nta_course"><strong>SISFFIT031</strong> - Instruct exercise to older clients</li>
                      <li class="nta_course"><strong>SISSSCO307</strong> - Implement injury prevention strategies</li>
                      <li class="nta_course"><strong>SISSSPT307A</strong> - Conduct advanced taping</li>
                      <li class="nta_course"><strong>SISSSTC301A</strong> - Instruct strength and conditioning techniques</li>
                      <li class="nta_course"><strong>SISSSTC402A</strong> - Develop strength and conditioning programs</li>
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