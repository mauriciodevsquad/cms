<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pronto -</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        header.masthead {
            position: relative;
            background-color: #343a40;
            background: url("img/masthead.jpg") no-repeat center center;
            background-size: cover;
            padding-top: 8rem;
            padding-bottom: 8rem;
        }

        header.masthead .overlay {
            position: absolute;
            background-color: #212529;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0.3;
        }

        header.masthead h1 {
            font-size: 2rem;
        }

        @media (min-width: 768px) {
            header.masthead {
                padding-top: 12rem;
                padding-bottom: 12rem;
            }

            header.masthead h1 {
                font-size: 3rem;
            }
        }
    </style>

</head>

<body id="page-top">

<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-3">My Business Page</h1>
                <p style="color: #eee;" class="mb-5">Lorem ipsum heaf me thsk oapef meu je kasdds sha amesd</p>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <a class="btn btn-primary btn-circle" style="width: 50px; height: 50px;">
                    <i class="fas fa-arrow-down"></i>
                </a>
            </div>
        </div>
    </div>
</header>


<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">


                <!-- Outer Row -->
                <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-12 col-md-9">

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mt-5">Welcome!</h1>
                                        </div>

                                        {{--<div class="btn-group btn-group-toggle text-center mt-3" data-toggle="buttons">--}}
                                        {{--<label class="btn btn-primary active">--}}
                                        {{--<input type="radio" name="options" id="option1" autocomplete="off" checked> New Customer--}}
                                        {{--</label>--}}
                                        {{--<label class="btn btn-primary">--}}
                                        {{--<input type="radio" name="options" id="option2" autocomplete="off"> Existing Customer--}}
                                        {{--</label>--}}
                                        {{--</div>--}}


                                        <div class="p-5">
                                            <form method="POST" action="">

                                                <div class="form-group row">
                                                    <label for="email"
                                                           class="col-12 col-form-label text-left">{{ __('E-Mail Address*') }}</label>

                                                    <div class="col-12">
                                                        <input id="email" type="email"
                                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                               name="email" value="{{ old('email') }}" required
                                                               autofocus>
                                                    </div>
                                                </div>

                                                <p>
                                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                                            data-target=".multi-collapse" aria-expanded="false"
                                                            aria-controls="multiCollapseExample1 multiCollapseExample2">
                                                        I'm a new customer
                                                    </button>


                                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                    <div class="form-group row">
                                                        <label for="name"
                                                               class="col-12 col-form-label text-left">{{ __('Full Name') }}</label>

                                                        <div class="col-12">
                                                            <input id="email" type="email"
                                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                   name="email" value="{{ old('name') }}"
                                                                   required
                                                                   autofocus>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="phone"
                                                               class="col-12 col-form-label text-left">{{ __('Phone Number') }}</label>

                                                        <div class="col-12">
                                                            <input id="phone" type="phone"
                                                                   class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                                   name="phone" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="street"
                                                               class="col-12 col-form-label text-left">{{ __('Street') }}</label>

                                                        <div class="col-12">
                                                            <input id="street" type="street"
                                                                   class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}"
                                                                   name="street" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="city"
                                                               class="col-6 col-form-label text-left">{{ __('City') }}</label>

                                                        <label for="state"
                                                               class="col-6 col-form-label text-left">{{ __('State') }}</label>

                                                        <div class="col-6">
                                                            <input id="city" type="city"
                                                                   class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                                                   name="city" required>
                                                        </div>

                                                        <div class="col-6">
                                                            <input id="state" type="state"
                                                                   class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}"
                                                                   name="state" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="zip"
                                                               class="col-6 col-form-label text-left">{{ __('Zip Code') }}</label>

                                                        <label for="state"
                                                               class="col-6 col-form-label text-left">{{ __('Contry') }}</label>

                                                        <div class="col-6">
                                                            <input id="zip" type="zip"
                                                                   class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}"
                                                                   name="zip" required>
                                                        </div>

                                                        <div class="col-6">
                                                            <input id="country" type="country"
                                                                   class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"
                                                                   name="country" required>
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


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="/">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>



