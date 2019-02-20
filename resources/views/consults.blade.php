@extends('layouts.dash-app')


@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
    <p class="mb-4">Lorem ipsum header shabuka bigiz liasona.</p>

    <!-- DataTales Example -->
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
                        <th>More</th>
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
                        <th>More</th>
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

