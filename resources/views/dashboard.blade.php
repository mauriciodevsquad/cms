@extends('layouts.dash-app')


@section('content')
    <h1 class="h3 mb-2 text-gray-800 mb-3">Dashboard</h1>

    <!-- Content Row -->
    <div class="row">

        <!-- Clients Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clients
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$clients->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Requests Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Requests
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$consults->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Request Form Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Request Form
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: #1cc88a !important;">
                                ONLINE
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="offset-lg-1 col-sm-12 col-lg-10 mt-5">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="text-center">
                    <h4 class="mt-3">Your request form is online at:</h4>
                    <a href="/user-request-form/{{auth()->user()->id}}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3">cms.test/user-request-form/{{auth()->user()->id}}</a>
                </div>
            </div>
        </div>
    </div>

@endsection

