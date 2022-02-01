@extends('admin.layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Create User</h5>
                    </div>
                    <div class="ibox-content">
                        <user-create-component />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
