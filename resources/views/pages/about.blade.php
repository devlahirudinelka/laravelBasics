@extends('layouts.layout_01')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        About
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">About Page</h5>
                        <p class="card-text">About Page</p>
                        <a href="#" class="btn btn-primary Aboutbtn">About Page Button</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection


@push('aboutcss')
    <style>
        .card-header {
            background-color: rgb(0, 153, 255);
            color: #fff;
        }

        .Aboutbtn {
            background-color: rgb(0, 153, 255);
            color: #fff;
        }
    </style>
@endpush
