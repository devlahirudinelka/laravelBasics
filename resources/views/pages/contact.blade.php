@extends('layouts.layout_01')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        Contact
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contact Page</h5>
                        <p class="card-text">Contact Page</p>
                        <a href="#" class="btn btn-primary Contactbtn">Contact Page Button</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection


@push('contactcss')
    <style>
        .card-header {
            background-color: rgb(174, 0, 255);
            color: #fff;
        }

        .Contactbtn {
            background-color: rgb(174, 0, 255);
            color: #fff;
        }
    </style>
@endpush
