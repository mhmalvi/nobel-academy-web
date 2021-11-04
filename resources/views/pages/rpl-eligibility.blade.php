@extends('layouts.app')

@section('title', 'Check you eligibility for RPL')

@section('content')
    <div class="container">
        <rpl-form-component />
        <div class="loader-wrapper" id="lds-wrapper"area-hidden='true'>
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
@endsection
