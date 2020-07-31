@extends('layouts.auth')
@section('content')

    <div class="content-header py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    {{-- <h1 >Dashboard</h1> --}}
                    <h1 class="m-0 text-dark">Clients List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item "><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Clients</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    {{-- {{$menu_active}} --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-2 mb-3">
                                    <a href="{{route('clients.create')}}" class="btn btn-primary btn-block">
                                        Add Client
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">

                                <table class="table table-striped">
                                    <thead style="white-space: nowrap">
                                        <tr>
                                            <td>Name</td>
                                            <td>Last Name</td>
                                            <td>Email</td>
                                            <td>Cell Phone</td>
                                            <td align="center">Actions</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($clients as $client)
                                        <tr>
                                            <td>{{$client->name}}</td>
                                            <td>{{$client->last_name}}</td>
                                            <td>{{$client->email}}</td>
                                            <td>{{$client->cell_phone}}</td>
                                            <td align="center">
                                                <a href="{{route('clients.edit', $client->id)}}" class="btn btn-warning">Edit</a>
                                                <a href="{{route('clients.destroy', $client->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" align="center">
                                                    There are no records
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

