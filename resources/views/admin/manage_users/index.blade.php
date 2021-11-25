@extends('admin.layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Users List</h5>
                    </div>
                    <div class="ibox-content">
                        <user-list-component />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
