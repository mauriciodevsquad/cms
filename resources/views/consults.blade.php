@extends('layouts.dash-app')


@section('content')
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
    <p class="mb-4">Lorem ipsum header shabuka bigiz liasona.</p>

    <button href="" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3 mb-2" data-toggle="modal"
            data-target="#myModal"><i
                class="fas fa-plus fa-sm text-white-50"></i> Create New Request
    </button>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => 'ConsultsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('description', 'Description')}}
                        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Enter a description...'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('client_id', 'Client') }}
                        {{ Form::select('client_id', $clientsList, null, array('class'=>'form-control', 'placeholder'=>'Please select a client ...')) }}
                    </div>
                    {{Form::submit('Create', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Request</th>
                        <th>Client</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Created</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>

                    @if($consults->count() > 7)
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Request</th>
                        <th>Client</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Created</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                    @endif

                    <tbody>

                    @if(count($consults) > 0)
                        @foreach($consults as $consult)
                            <tr>
                                <td>{{ $consult->id }}</td>
                                <td>{{ $consult->description }}</td>
                                <td>{{ $consult->client->full_name }}</td>
                                <td>{{ $consult->client->phone }}</td>
                                <td>{{ $consult->client->email }}</td>
                                <td>{{ $consult->created_at }}</td>
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
                                                    {!! Form::open(['action' => ['ConsultsController@update', $consult->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                                    <div class="form-group">
                                                        {{Form::label('description', 'Description')}}
                                                        {{Form::textarea('description', $consult->description, ['class' => 'form-control', 'placeholder' => 'e.g. Mauricio'])}}
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            {{ Form::label('client_id', 'Client') }}
                                                            {{ Form::select('client_id', $clientsList, null , array('class'=>'form-control', 'placeholder'=>'Please select a client ...')) }}
                                                        </div>
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
                                    {!! Form::open(['action' => ['ConsultsController@destroy', $consult->id], 'method' => 'POST']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::button('<a><i class="fas fa-trash"></i></a>', ['class' => 'btn btn-danger', 'type' => 'submit']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>No Requests yet :(</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

