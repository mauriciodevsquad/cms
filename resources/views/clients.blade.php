@extends('layouts.dash-app')


@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
    <p class="mb-4">Lorem ipsum master header shabuka bigiz liasona.</p>

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
                        <th>Requests</th>
                        <th>Bookings</th>
                        <th>Date</th>
                        <th>More</th>
                    </tr>
                    </thead>

                    @if($clients->count() > 10)
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Requests</th>
                            <th>Bookings</th>
                            <th>Date</th>
                            <th>More</th>
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
                                <td><a href="">1</a></td>
                                <td><a href="">0</a></td>
                                <td>{{$client->created_at}}</td>
                                <td></td>
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

