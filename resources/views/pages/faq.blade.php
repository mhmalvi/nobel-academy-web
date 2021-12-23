@extends('layouts.app')

@section('title', 'FAQ - ' . env('APP_NAME'))

@section('content')
    <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1>Frequently Asked Questions</h1>
                    <p>We offer certified courses in the beauty industry that you can rely on</p>
                    <div class="page_nav">
                        <span>You are here:</span> <a href="{{ URL::to('/') }}">Home</a> <span><i
                                class="fa fa-angle-double-right"></i>FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="padding">
        <div class="container aboutus">
            <div class="row">
                <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">

                    <h2 class="heading heading_space">FAQ <span class="divider-left"></span></h2>
                    <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq1">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                    Question #1 <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq1">
                                                <div class="panel-body px-3 mb-4">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error facilis iure obcaecati perferendis labore commodi? Eos magnam similique eum asperiores pariatur impedit, minus quas possimus, sunt voluptas exercitationem quod? Porro?
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq2">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                    Question #2 <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq2">
                                                <div class="panel-body px-3 mb-4">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere provident perferendis harum ex dolore similique, ratione tenetur odit veniam earum ipsam quia? Provident repellendus cupiditate accusantium sunt a pariatur dolorum.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq3">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                    Question #3 <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq3">
                                                <div class="panel-body px-3 mb-4">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere provident perferendis harum ex dolore similique, ratione tenetur odit veniam earum ipsam quia? Provident repellendus cupiditate accusantium sunt a pariatur dolorum.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card learn-more-faq">
                                        <p class="card-header">
                                            Looking for answer you can't find?
                                        </p>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xs-4 col-xs-offset-4">
                                                    <img src="/assets/images/headphone.png" alt="call us">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center learn-more-card-content">
                                                    <p>Our experts are always here to help.</p>
                                                    <p>
                                                        <b>
                                                            <a href="tel:1300 616 123">1300 616 123</a>
                                                        </b>
                                                    </p>
                                                    <p class="get-in-touch-wrapper">
                                                        <a href="tel:1300 616 123" class="btn btn-primary btn-block">
                                                            Get in touch now!
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
    <style>
        .panel-heading {
            padding: 0;
            border-width: 0 !important;
        }

        .panel-heading h3 a {
            background: #fff;
            display: block;
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            text-decoration: none;
            transition: 0.15s all ease-in-out;
        }

        .panel-heading h3 a:hover, .panel-heading h3 a:not(.collapsed) {
            background: #fafafa;
            transition: 0.15s all ease-in-out;
        }

        .panel-heading h3 a:not(.collapsed)
        {
            color: #fff !important;
            background: #3fd4fb !important;
        }

        .panel-heading h3 a:not(.collapsed) i:before {
            content: "\f068";
            color: #fff;
        }
        .panel-heading h3 a i {
            color: #002b46;
        }

        .panel-body {
            padding: 20px 30px;
        }

        .learn-more-faq {
            border: 1px solid #d8d8d8 !important;
        }

        .learn-more-faq .card-header {
            background: #3fd4fb !important;
            color: #fff;
            border-width: 0;
        }

        .learn-more-faq .card-body .row {
            margin: 0 !important;
        }

        .learn-more-faq .card-body img {
            width: 100%;
        }

        .learn-more-faq .card-header {
            font-size: 18px;
            font-weight: bold;
        }

        .learn-more-faq .btn.btn-primary {
            background: #3fd4fb;
            border-width: 0;
        }

        .learn-more-card-content {
            margin-top: 10px;
        }

        .get-in-touch-wrapper {
            margin-top: 20px;
        }

        .get-in-touch-wrapper a {
            color: #fff !important;
            font-weight: bold;
        }
    </style>
@endpush
