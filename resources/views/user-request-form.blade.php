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

<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <div class="container-fluid">

                <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-12 col-md-9">

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mt-5">Welcome!</h1>
                                        </div>


                                        <div class="p-5">
                                            {!! Form::open(['action' => 'FormController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="form-group">
                                                {{Form::label('full_name', 'Full Name')}}
                                                {{Form::text('full_name', '', ['class' => 'form-control', 'placeholder' => 'e.g. Mauricio'])}}
                                            </div>
                                            <div class="form-group">
                                                {{Form::label('email', 'Email')}}
                                                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'e.g. mauricio@gmail.com'])}}
                                            </div>
                                            <div class="form-group">
                                                {{Form::label('phone', 'Phone')}}
                                                {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'e.g. 801-123-1233'])}}
                                            </div>
                                            <div class="form-group">
                                                {{Form::label('address', 'Address')}}
                                                {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => '10123 Sage Vista Avenue, SLC, UT, 84106, USA'])}}
                                            </div>

                                            <div class="form-group">
                                                {{Form::label('description', 'Description')}}
                                                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Any comments'])}}
                                            </div>
                                            {{Form::submit('Create', ['class'=>'btn btn-primary'])}}
                                            {!! Form::close() !!}
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



