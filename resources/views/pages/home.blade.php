@extends('layouts.layout_01')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        Home
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Home Page</h5>
                        <p class="card-text">Home Page</p>
                        <a href="#" class="btn btn-primary homebtn">Home Page Button</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection

@push('homecss')
    <style>
        .card-header {
            background-color: rgb(0, 255, 157);
            color: #fff;
        }

        .homebtn {
            background-color: rgb(0, 255, 157);
            color: #fff;
        }
    </style>
@endpush
