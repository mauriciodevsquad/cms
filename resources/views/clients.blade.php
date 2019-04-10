@extends('layouts.dash-app')


@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
    <p class="mb-4">Lorem ipsum master header shabuka bigiz liasona.</p>

    <button href="" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3 mb-2" data-toggle="modal"
            data-target="#myModal"><i
                class="fas fa-plus fa-sm text-white-50"></i> Create New Client
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => 'ClientsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
                    {{Form::submit('Create', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>

                    @if($clients->count() > 7)
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                    @endif

                    <tbody>

                    @if(count($clients) > 0)
                        @foreach($clients as $client)
                            <tr>
                                <td>{{$client->full_name}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->phone}}</td>
                                <td>{{$client->address}}</td>
                                <td>{{$client->created_at}}</td>
                                <td>
                                    <button href="" class="btn btn-info" data-toggle="modal"
                                            data-target="#myModal2"><i class="fas fa-pen text-center"></i></button>


                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal2" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::open(['action' => ['ClientsController@update', $client->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                                    <div class="form-group">
                                                        {{Form::label('full_name', 'Full Name')}}
                                                        {{Form::text('full_name', $client->full_name, ['class' => 'form-control', 'placeholder' => 'e.g. Mauricio'])}}
                                                    </div>
                                                    <div class="form-group">
                                                        {{Form::label('email', 'Email')}}
                                                        {{Form::text('email', $client->email, ['class' => 'form-control', 'placeholder' => 'e.g. mauricio@gmail.com'])}}
                                                    </div>
                                                    <div class="form-group">
                                                        {{Form::label('phone', 'Phone')}}
                                                        {{Form::text('phone', $client->phone, ['class' => 'form-control', 'placeholder' => 'e.g. 801-123-1233'])}}
                                                    </div>
                                                    <div class="form-group">
                                                        {{Form::label('address', 'Address')}}
                                                        {{Form::text('address', $client->address, ['class' => 'form-control', 'placeholder' => '10123 Sage Vista Avenue, SLC, UT, 84106, USA'])}}
                                                    </div>
                                                    {{Form::hidden('_method', 'PUT')}}
                                                    {{Form::submit('Save Changes', ['class'=>'btn btn-primary'])}}
                                                    {!! Form::close() !!}

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </td>
                                <td>
                                    {!! Form::open(['action' => ['ClientsController@destroy', $client->id], 'method' => 'POST']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::button('<a><i class="fas fa-trash"></i></a>', ['class' => 'btn btn-danger', 'type' => 'submit']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>No Clients yet :(</td>
                        </tr>
                    @endif


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

