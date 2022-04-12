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
                                    <div class="panel-group" id="accordion">
                                        @foreach ($data as $key => $faq)
                                            <div class="panel panel-default">
                                                <div class="panel-heading p-3 mb-3" id="faq{{ $key }}">
                                                    <h3 class="panel-title">
                                                        <a href="#collapse{{ $key }}" class="collapsed"
                                                            data-toggle="collapse">
                                                            {{ $faq['title'] }}
                                                            <i class="pull-right fa fa-plus"></i>
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapse{{ $key }}" class="panel-collapse collapse"
                                                    data-parent="#accordion">
                                                    <div class="panel-body px-3 mb-4">
                                                        {!! $faq['description'] !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="faq9">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse"
                                                    href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                                    How do I get RPL in Australia?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse9" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="faq9">
                                            <div class="panel-body px-3 mb-4">
                                                All registered training organisation (RTO) provide RPL assessments. So, you
                                                can contact local TAFE, RTO, or colleges include UCT, NTA, ATR, etc., to get
                                                help in this regard. You can also contact any good agency like ITEC for
                                                guidelines, and the Department of Employment, Small Business,, and Training
                                                on 1300 369 935 to discuss your RPL options.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="faq10">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse"
                                                    href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                    How much does RPL cost in Australia?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse10" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="faq10">
                                            <div class="panel-body px-3 mb-4">
                                                Under state training initiatives, the Australian Government provides funds
                                                for eligible students, and for the RPL process, they don’t need any
                                                additional cost. But if you are a self-funded student and enrolled as a
                                                Fee-For-Service student, then you have to pay the fee for it. The cost
                                                normally depends on your experience, level of qualification, course
                                                duration, etc. You can find all guidelines at ITEC that will help you save
                                                your valuable time.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="faq11">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse"
                                                    href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                                    What is RPL eligibility?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse11" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="faq11">
                                            <div class="panel-body px-3 mb-4">
                                                To gain RPL accreditation, one must have to be eligible. Anyone who has
                                                previous knowledge, experience, or skills relevant to the course they want
                                                to complete can apply for this process. Whether your training or experience
                                                was paid and voluntary work, was in Australia or overseas, you can apply. Of
                                                course, you must provide evidence of the skills and knowledge you have
                                                pursued.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="faq12">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse"
                                                    href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                                    Who qualifies for RPL?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse12" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="faq12">
                                            <div class="panel-body px-3 mb-4">
                                                Anyone who has previous knowledge, experience, or skills relevant to the
                                                course they want to complete can apply for RPL. Whether your training or
                                                experience was paid and voluntary work, was in Australia or overseas, you
                                                can apply. Of course, you must provide evidence of the skills and knowledge
                                                you have gained.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="faq13">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse"
                                                    href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                                    Who qualifies for RPL?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse13" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="faq13">
                                            <div class="panel-body px-3 mb-4">
                                                Anyone who has previous knowledge, experience, or skills relevant to the
                                                course they want to complete can apply for RPL. Whether your training or
                                                experience was paid and voluntary work, was in Australia or overseas, you
                                                can apply. Of course, you must provide evidence of the skills and knowledge
                                                you have gained.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="faq14">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse"
                                                    href="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                                    Do you have to pay for RPL?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapse14" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="faq14">
                                            <div class="panel-body px-3 mb-4">
                                                Students funded by the Australian Government under state training
                                                initiatives don’t need to pay, but self-funded students need to pay for RPL.
                                                However, agencies normally don’t take any initial assessment fee. For
                                                example, ITEC offers free, no-obligation, RPL skills check.
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
                                                <img src="{{ asset('assets/images/headphone.png') }}" alt="call us">
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
            font-weight: 400;
            padding: 15px;
            text-decoration: none;
            transition: 0.15s all ease-in-out;
            font-family: "Source Sans Pro";
        }

        .panel-heading h3 a:hover,
        .panel-heading h3 a:not(.collapsed) {
            background: #fafafa;
            transition: 0.15s all ease-in-out;
        }

        .panel-heading h3 a:not(.collapsed) {
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
