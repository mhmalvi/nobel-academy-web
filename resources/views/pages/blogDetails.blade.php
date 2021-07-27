@extends('layouts.app')

@section('title', $blog->blog_title)

    @push('seo')
        <meta name="tags" content="{{ $blog->meta_tags }}" />
        <meta name="keywords" content="{{ $blog->meta_keys }}" />
    @endpush


    @push('og')
        <meta property="og:tags" content="{{ $blog->meta_tags }}">
        <meta property="og:keywords" content="{{ $blog->meta_keys }}">
        <meta property="og:description" content="{{ $blog->meta_desc }}">
        <meta property="og:image" content="{{ asset('storage/blogs/' . $blog->thumbnail) }}" />
    @endpush


    @push('css')

        <style>
            .at-resp-share-element .at-share-btn {
                margin-bottom: 0px !important;
            }

        </style>

    @endpush
@section('content')
    <!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-content">
          <h1>Our Blog</h1>
          <p>We offer the most complete house renovating services in the country</p>
          <div class="page_nav">
        <span>You are here:</span> <a href="{{route('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog</span>
        </div>
        </div>
      </div>
    </div>
  </section>
  
  
  
  <!--BLOG SECTION-->
  <section id="blog" class="padding-bottom-half padding-top">
   <h3 class="hidden">hidden</h3>
   <div class="container">
       <div class="row d-flex justify-content-center">
        <div class="col-md-9 col-sm-8 wow fadeIn" data-wow-delay="400ms">
            @isset($blog)
                @php
                    $date = date("M d, Y", strtotime($blog->created_at));
                @endphp 
                <article class="blog_item padding-bottom-half heading_space" style="border:none;">
                    <div class="image bottom25">
                    <img src="{{asset('storage/app/public/blogs/'.$blog->thumbnail)}}" alt="blog" style="max-width: 822px; max-height: 480px;">
                    </div>
                    <h3>{{$blog->blog_title}}</h3>
                    <hr>
                    <ul class="comment margin10">
                        <li><a href="javascript:void(0)"><i class="icon-user"></i>&nbsp; by &nbsp; <span class="text-primary">{{$blog->user->name}}</span></a></li>
                        <li><a href="javascript:void(0)"><i class="icon-time2"></i>{{$date}}</a></li>
                    </ul>
                    <hr>
                    {{-- Details --}}
                    <p>
                        @php
                            echo $blog->blog_details;
                        @endphp
                    </p>
                </article>
            @endisset
          <div class="share clearfix heading_space">
            <div class="d-flex justify-content-between align-items-center">
              <p><strong>Share This Article:</strong></p>
              <div class="addthis_inline_share_toolbox"></div>
            </div>
          </div>
          {{-- <article>
            <h3 class="heading bottom25">3 Comments<span class="divider-left"></span></h3>
            <div class="profile_border">
                <div class="profile top20 bottom20">
                <div class="p_pic"><img src="images/profile2.png" alt="instructure"></div>
                <div class="profile_text">
                    <h5><strong>JOHN PARKER</strong>  -  <span> Great for Starters</span></h5>
                    <ul class="comment">
                    <li><a href="#.">Jan 28, 2016 - 10:07 pm</a></li>
                    </ul>
                    <p>Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium.</p>
                    <a class="readmore" href="#.">LEAVE A REPLY</a>
                </div>
                </div>
            </div>
            <div class="profile_border">
                <div class="profile top20 bottom20">
                <div class="p_pic"><img src="images/profile3.png" alt="instructure"></div>
                <div class="profile_text">
                    <h5><strong>JOHN PARKER</strong>  -  <span>Excellent Work</span></h5>
                    <ul class="comment">
                    <li><a href="#.">Jan 28, 2016 - 10:07 pm</a></li>
                    </ul>
                    <p>Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium.</p>
                    <a class="readmore" href="#.">LEAVE A REPLY</a>
                </div>
                </div>
            </div>
            <div class="profile_border heading_space">
                <div class="profile top20 bottom20">
                <div class="p_pic"><img src="images/profile4.png" alt="instructure"></div>
                <div class="profile_text">
                    <h5><strong>JOHN PARKER</strong>  -  <span>Awesome Quality</span></h5>
                    <ul class="comment">
                    <li><a href="#.">Jan 28, 2016 - 10:07 pm</a></li>
                    </ul>
                    <p>Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium.</p>
                    <a class="readmore" href="#.">LEAVE A REPLY</a>
                </div>
                </div>
            </div>
            <h2 class="heading bottom25">Leave A Reply<span class="divider-left"></span></h2>
            <form class="findus heading_space">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Website" required>
            </div>
            <textarea placeholder="Comment"></textarea>
            <button type="submit" class="btn_common yellow border_radius">post your comment</button>
            </form>
          </article> --}}
        </div>
        {{-- <div class="col-md-3 col-sm-4 wow fadeIn" data-wow-delay="400ms">
          <aside class="sidebar bg_grey border-radius">
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
                      <input type="radio" name="star" class="star-1" id="star-1" />
                      <label class="star-1" for="star-1">1</label>
                      <input type="radio" name="star" class="star-2" id="star-2" />
                      <label class="star-2" for="star-2">2</label>
                      <input type="radio" name="star" class="star-3" id="star-3" />
                      <label class="star-3" for="star-3">3</label>
                      <input type="radio" name="star" class="star-4" id="star-4" checked  />
                      <label class="star-4" for="star-4">4</label> 
                      <input type="radio" name="star" class="star-5"  id="star-5" />
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
                      <input type="radio" name="star" class="star-1" id="star-6" />
                      <label class="star-1" for="star-6">1</label>
                      <input type="radio" name="star" class="star-2" id="star-7" />
                      <label class="star-2" for="star-7">2</label>
                      <input type="radio" name="star" class="star-3" id="star-8" />
                      <label class="star-3" for="star-8">3</label>
                      <input type="radio" name="star" class="star-4" id="star-9"  />
                      <label class="star-4" for="star-9">4</label> 
                      <input type="radio" name="star" class="star-5"  id="star-10" checked  />
                      <label class="star-5" for="star-10">5</label>
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
@endsection

@push('js')
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fa22324af2533af"></script>
@endpush