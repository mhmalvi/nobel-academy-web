@extends('layouts.app')

@section('title', 'Check you eligibility for RPL')

@section('content')
    <div class="container">
        <div class="row success-wrapper">
            <div class="col-md-12 text-center text-section">
                <h2>RPL form submitted successfully</h2>

                <p>Thanks for taking your time and submitting the form. We will get back to you as soon as possible.</p>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <img src="{{ asset('images/success.png') }}" alt="Success" class="success-img">
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <a href="/" class="btn btn-link">Go to Home</a>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .success-img {
            width: 100%;
            max-width: 400px;
        }

        .success-wrapper {
            padding: 2rem 0;
        }

    </style>
@endpush
