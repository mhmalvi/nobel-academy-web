@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <create-category-component></create-category-component>
        </div>

        <div class="col-md-7 offset-md-1">
            <category-list-component></category-list-component>
        </div>
    </div>
</div>
@endsection