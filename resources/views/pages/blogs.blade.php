@extends('layouts.app')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-content">
          <h1>Our Blog</h1>
          <p>We offer certified courses in the beauty industry that you can rely on</p>
          <div class="page_nav">
        <span>You are here:</span> <a href="{{URL::to('/')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog</span>
        </div>
        </div>
      </div>
    </div>
</section>
<!--BLOG SECTION-->
<section id="blog" class="padding">
  <div class="container">
    <h2 class="hidden">Our Blog</h2>
    <div class="row d-flex justify-content-center">
      <div class="col-md-9">
        @isset($blogs)
            @foreach ($blogs as $blog)
            @php
                $date = date("M d, Y", strtotime($blog->created_at));
            @endphp 
            <article class="blog_item heading_space wow fadeInLeft" data-wow-delay="300ms" style="border: none;">
              <div class="row">
                <div class="col-md-5 col-sm-5 heading_space">
                  <div class="image">
                    <img src="{{asset('storage/app/public/blogs/'.$blog->thumbnail)}}" alt="blog" class="border_radius" style="max-width: 320px;">
                  </div>
                </div>
                <div class="col-md-7 col-sm-7 heading_space">
                  <h3>{{$blog->blog_title}}</h3>
                  <ul class="comment margin10">
                    <li><a href="javascript:void(0)">{{$date}}</a></li>
                    {{-- <li><a href="#."><i class="icon-comment"></i> 5</a></li> --}}
                  </ul>
                  <p class="margin10">
                    {{$blog->blog_summery}}
                  </p>
                  <a class=" btn_common btn_border margin10 border_radius" href="{{route('blogDetail', $blog->blog_slug)}}">Read More</a>
                </div>
              </div>
            </article>
            @endforeach
        @endisset
        <div class="pager_nav wow fadeIn" data-wow-delay="600ms">
          {{-- <ul class="pagination">
            <li class="hidden">
              <a href="#." aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#.">1</a></li>
            <li><a href="#.">2</a></li>
            <li><a href="#.">3</a></li>
            <li>
              <a href="#." aria-label="Next">
              <span aria-hidden="true">Next &nbsp; <i class="fa fa-long-arrow-right"></i></span>
              </a>
            </li>
          </ul> --}}
          @isset($blogs)
          {{ $blogs->links() }}
          @endisset
        </div>
      </div>
      {{-- <div class="col-md-3">
        <aside class="sidebar bg_grey border-radius wow fadeIn" data-wow-delay="300ms">
          <div class="widget heading_space">
            <form class="widget_search border-radius">
              <div class="input-group">
                <input type="search" class="form-control" placeholder="Search Here" required>
                <i class="input-group-addon icon-icons185"></i>
              </div>
            </form>
          </div>
          <div class="widget heading_space">
            <h3 class="bottom20">Featured Courses</h3>
            <div class="media">
              <a class="media-left" href="#."><img src="images/post1.png" alt="post"></a>
              <div class="media-body">
                <h5 class="bottom5">Basic Time Management Course</h5>
                <a href="#." class="btn-primary border_radius bottom5">free</a>
                <form class="star_rating">
                  <div class="stars">
                    <input type="radio" name="star" class="star-1" id="star-01" />
                    <label class="star-1" for="star-01">1</label>
                    <input type="radio" name="star" class="star-2" id="star-02" />
                    <label class="star-2" for="star-02">2</label>
                    <input type="radio" name="star" class="star-3" id="star-03" />
                    <label class="star-3" for="star-03">3</label>
                    <input type="radio" name="star" class="star-4" id="star-04"  />
                    <label class="star-4" for="star-04">4</label> 
                    <input type="radio" name="star" class="star-5"  id="star-05" checked  />
                    <label class="star-5" for="star-05">5</label>
                    <span></span>
                  </div>
                </form>
                <span class="name">Michael Windzor</span>
              </div>
            </div>
            <div class="media">
              <a class="media-left" href="#."><img src="images/post1.png" alt="post"></a>
              <div class="media-body">
                <h5 class="bottom5">Basic Time Management Course</h5>
                <a href="#." class="btn-primary border_radius bottom5">free</a>
                <form class="star_rating">
                  <div class="stars">
                    <input type="radio" name="star" class="star-1" id="star-1" />
                    <label class="star-1" for="star-1">1</label>
                    <input type="radio" name="star" class="star-2" id="star-2" />
                    <label class="star-2" for="star-2">2</label>
                    <input type="radio" name="star" class="star-3" id="star-3" />
                    <label class="star-3" for="star-3">3</label>
                    <input type="radio" name="star" class="star-4" id="star-4"  />
                    <label class="star-4" for="star-4">4</label> 
                    <input type="radio" name="star" class="star-5"  id="star-5" checked  />
                    <label class="star-5" for="star-5">5</label>
                    <span></span>
                  </div>
                </form>
                <span class="name">Michael Windzor</span>
              </div>
            </div>
            <div class="media">
              <a class="media-left" href="#."><img src="images/post1.png" alt="post"></a>
              <div class="media-body">
                <h5 class="bottom5">Basic Time Management Course</h5>
                <a href="#." class="btn-primary border_radius bottom5">free</a>
                <form class="star_rating">
                  <div class="stars">
                    <input type="radio" name="star" class="star-1" id="star-11" />
                    <label class="star-1" for="star-11">1</label>
                    <input type="radio" name="star" class="star-2" id="star-12" />
                    <label class="star-2" for="star-12">2</label>
                    <input type="radio" name="star" class="star-3" id="star-13" />
                    <label class="star-3" for="star-13">3</label>
                    <input type="radio" name="star" class="star-4" id="star-14"  />
                    <label class="star-4" for="star-14">4</label> 
                    <input type="radio" name="star" class="star-5"  id="star-15" checked  />
                    <label class="star-5" for="star-15">5</label>
                    <span></span>
                  </div>
                </form>
                <span class="name">Michael Windzor</span>
              </div>
            </div>
          </div>
          <div class="widget heading_space">
            <h3 class="bottom20">Top Tags</h3>
            <ul class="tags">
              <li><a href="#.">Books</a></li>
              <li><a href="#.">Midterm test </a></li>
              <li><a href="#.">Presentation</a></li>
              <li><a href="#.">Courses</a></li>
              <li><a href="#.">Certifications</a></li>
              <li><a href="#.">Teachers</a></li>
              <li><a href="#.">Student Life</a></li>
              <li><a href="#.">Study</a></li>
              <li><a href="#.">Midterm test </a></li>
              <li><a href="#.">Presentation</a></li>
              <li><a href="#.">Courses</a></li>
            </ul>
          </div>
        </aside>
      </div> --}}
    </div>
  </div>
</section>
  <!--BLOG SECTION-->
@endsection