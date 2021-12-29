@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <edit-category-component data="{{ json_encode($category) }}" />
            </div>
        </div>
    </div>
@endsection