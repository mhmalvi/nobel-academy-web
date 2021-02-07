@extends('layouts.app')

@section('content')
    <!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-content">
          <h2 style="color: #fff;">SHB40115 - Certificate IV in Beauty Therapy</h2>
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
          <img src="{{asset('assets/images/courses/course02.jpg')}}" alt="Course" class=" border_radius img-responsive bottom15">
          <div class="row">
            <div class="col-sm-12">
              <h3 class="top30 bottom20">Qualification Description</h3>
              <p class="bottom25">
                This qualification reflects the role of individuals who work as beauty therapists to provide a range of beauty therapy treatments and services, including lash and brow treatments, nail services, make-up, massage and waxing. They communicate with clients to recommend treatments and services and sell retail skin care and cosmetic products.

                These individuals undertake work independently, with limited guidance from others, to perform routine and non-routine activities and solve non-routine problems. They apply and adapt technical skills and knowledge, and use judgment in the provision of beauty treatments and services. These individuals are responsible for their own outputs and provide limited guidance to others.

                Work is typically conducted in beauty salons and spas.

                No occupational licensing, certification or specific legislative requirements apply to this qualification at the time of publication.
              </p>
            </div>
          </div>
          <div class="bottom15"></div>
          <div class="row">
            <div class="col-sm-12">
              <h3 class="top30 bottom20">Packaging Rules</h3>
              <p class="bottom25">19 units must be completed</p>
              <ul>
                <li>13 core units</li>
                <li>
                  <span>6 elective units, consisting of</span>
                  <ul>
                    <li>- 3 units from the list below</li>
                    <li>- 3 units from the list below, elsewhere in SHB Training Package, or any other current Training Package or accredited course</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>

          <br>
          <br>
          <div class="d-flex">
            <button type="button" class="btn_common yellow border_radius" data-toggle="modal" data-target="#applyNow" onclick="event.preventDefault(); applyNow('Certificate IV in Beauty Therapy');">Apply Now</button>
          </div>

        </div>
        <aside class="col-sm-4 wow fadeIn" data-wow-delay="400ms">
          <div class="widget heading_space">
            <h3 class="bottom20">Core units</h3>
            <div class="media">
              <div class="media-body">
                <table class="table">
                  <tbody>
                  <tr>
                    <td style="vertical-align:middle">
                      <p>SHBBBOS001   </p>
                    </td>
                    <td style="vertical-align:middle">
                      <p>Apply cosmetic tanning products</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle">
                      <p>SHBBBOS002</p>
                    </td>
                    <td style="vertical-align:middle">
                      <p>Provide body massages</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle">
                      <p>SHBBBOS003</p>
                    </td>
                    <td style="vertical-align:middle">
                      <p>Provide body treatments</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle">
                      <p>SHBBFAS001</p>
                    </td>
                    <td style="vertical-align:middle">
                      <p>Provide lash and brow services</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle">
                      <p>SHBBFAS002	</p>
                    </td>
                    <td style="vertical-align:middle">
                      <p>Provide facial treatments and skin care recommendations</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle">
                      <p>SHBBHRS001</p>
                    </td>
                    <td style="vertical-align:middle">
                      <p>Provide waxing services</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle">
                      <p>SHBBMUP002</p>
                    </td>
                    <td style="vertical-align:middle">
                      <p>Design and apply make-up</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle">
                      <p>SHBBNLS001  </p>
                    </td>
                    <td style="vertical-align:middle">
                      <p>Provide manicure and pedicare services</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle">
                      <p>SHBBRES001</p>
                    </td>
                    <td style="vertical-align:middle">
                      <p>Research and apply beauty industry information</p>
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
                      <p>SHBXCCS002  </p>
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
                      <p>Comply with organisational requirements within a personal services environment</p>
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
                </tbody>
                </table>
              </table>
              </div>
            </div>
          </div>
          <div class="widget heading_space">
            <h3 class="bottom20">Elective units</h3>

            <table class="table">
              <tbody>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBBOS004</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Provide aromatherapy massages</p>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBFAS003</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Provide specialised facial treatments </p>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBMUP001</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Apply eyelash extensions </p>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBMUP003</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Design and apply make-up for photography</p>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBMUP004</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Design and apply remedial camouflage make-up </p>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBNLS002</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Apply gel nail enhancements</p>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBNLS003</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Apply acrylic nail enhancements</p>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBNLS004</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Apply nail art</p>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBNLS005</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Use electric file equipment for nail services</p>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align:middle">
                    <p>SHBBNLS006</p>
                  </td>
                  <td style="vertical-align:middle">
                    <p>Apply advanced nail art</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- Courses -->
@endsection