@extends('dashboard.inc.app')


@section('content')


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
    <p class="mb-4">Lorem ipsum master header shabuka bigiz liasona.</p>

    <!-- Area Chart -->
    <div class="offset-lg-1 col-sm-12 col-lg-10 mt-5">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <div class="card-body">
                <div class="text-center">
                    <h4 class="mt-3">You don't have a request form set up yet.</h4>
                    <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Create Request Form</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Area Chart -->
    <div class="offset-lg-1 col-sm-12 col-lg-10 mt-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold ">Question 1</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">

                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="mt-3">Type of question:</h5>
                    </div>
                    <div class="col-12 text-center">
                        <div class="dropdown mb-4">
                            <button class="btn btn-primary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                Dropdown
                            </button>
                            <div class="dropdown-menu animated--fade-in"
                                 aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Text</a>
                                <a class="dropdown-item" href="#">Multiple Choice</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Area Chart -->
    <div class="offset-lg-1 col-sm-12 col-lg-10 mt-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold ">Question 1</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                         aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="text-left">
                    <h5 class="font-weight-bold">Type your question:</h5>
                    <input type="text" class="form-control bg-light border-1 small"
                           placeholder="E.g. What's your favorite animal?" aria-label="Search"
                           aria-describedby="basic-addon2">
                </div>
            </div>
        </div>
    </div>

@endsection
