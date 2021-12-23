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
                                                    Is RPL allowed for a PR visa in Australia?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq1">
                                                <div class="panel-body px-3 mb-4">
                                                    RPL is a skills’ assessment to be used for PR Visa within Australia. RPL helps to apply for PR Visa in Australia and thus people get opportunities to relocate to Australia. ICT Skill Assessment i.e., RPL report is one of the steps to submit a PR application in Australia examined by ACS. Therefore, it is required to file an RPL to apply for a PR Visa in Australia.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq2">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                    What is the best RPL agency in Australia?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq2">
                                                <div class="panel-body px-3 mb-4">
                                                    There are several agencies in Australia that provide RPL services for interested people. ITEC is one of the best agencies. It provides a free, no-obligation RPL skills check provided by an experienced ITEC representative. Also, ITEC has a partnership with the best RTO providers.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq3">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                    What is RPL for Australia?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq3">
                                                <div class="panel-body px-3 mb-4">
                                                    RPL signifies ‘Recognition of Prior Learning. In general, RPL helps to convert previous skills, knowledge, and learning of an experienced person. This process can be recognised as part of a new qualification.
                                                    <br>
                                                    RPL is also a good method to ensure that you do not waste time learning in areas where you are already skilled.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq4">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                    Which cities are popular for an RPL course in Australia?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq4">
                                                <div class="panel-body px-3 mb-4">
                                                    Recognising your talents by an RPL test can assist you in achieving the career you have always wanted. In Australia, RPL is popular and has huge value. Cities like Tasmania, NSW, Sydney are popular among experienced people to pursue RPL.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq5">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                    Can you be a chef without a degree in Australia?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq5">
                                                <div class="panel-body px-3 mb-4">
                                                    Your answer is yes. You can become an experienced chef without studying; however, you must have working experience, a valid RPL certificate, and then assess skills by a chef.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq6">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                    What is recognition of prior learning in Australia?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq6">
                                                <div class="panel-body px-3 mb-4">
                                                    Recognition of Prior Learning is also popularly known as RPL in short. In general, it helps to convert previous skills, knowledge, and learning of an experienced person. This process can be recognised as part of a new qualification.
                                                    <br />
                                                    Recognition of Prior Learning is also a good method to ensure that you do not waste time learning in areas where you already are skilled.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq7">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                    Why do you need RPL Report for Australian Immigration?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq7">
                                                <div class="panel-body px-3 mb-4">
                                                    RPL is a term used to describe the term "Recognition of Prior Learning which is an official report submitted to the Australian Computer Society (ACS) by people who wish to migrate to Australia to begin their ICT related jobs, but do not possess an ICT certification or comes from other IT background.
                                                    <br />
                                                    Therefore, if you don't have any degree that is related to the field of ICT related profession or field, an RPL is mandatory.
                                                    <br />
                                                    As you can see, there are a lot of people who wish to move to Australia. This is why some proof is needed prior to submitting an apply to become an immigrant. We need skilled migrants, and RPL is one of the ways to demonstrate this.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading p-3 mb-3" role="tab" id="faq8">
                                                <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                                    What is RPL Report and Why it is required?
                                                    <i class="pull-right fa fa-plus"></i>
                                                </a>
                                                </h3>
                                            </div>
                                            <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq8">
                                                <div class="panel-body px-3 mb-4">
                                                    Recognisance of Prior Learning (RPL) is a document that needs to be submitted for submission to the Australian Computer Society (ACS). If you're planning to relocate to Australia and would like to continue with your career path in ICT related fields, however, you don't have an academic qualification in ICT qualifications or have a non-related background.
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
