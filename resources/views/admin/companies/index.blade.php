@extends('layouts.auth')
@section('content')

    <div class="content-header py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    {{-- <h1 >Dashboard</h1> --}}
                    <h1 class="m-0 text-dark">Companies List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Companies</li>
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
                                    <a href="{{route('companies.create')}}" class="btn btn-primary btn-block">
                                        Add Company
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">

                                <table class="table table-striped">
                                    <thead style="white-space: nowrap">
                                        <tr>
                                            <td>Name</td>
                                            <td>Email</td>
                                            <td>Contact Phone</td>
                                            <td>Url Quote</td>
                                            <td align="center">Actions</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($companies as $company)
                                            <tr>
                                                <td>@if($company->user){{$company->user->name}}@endif</td>
                                                <td>@if($company->user){{$company->user->email}}@endif</td>
                                                {{-- <td>{{$company->phone}}</td> --}}
                                                <td>{{$company->contact_phone}}</td>
                                                {{-- <td>{{$company->slug_form}}</td> --}}
                                                <td>{{url('form/'.$company->slug_form)}}</td>
                                                <td align="center" class="d-flex">
                                                    <a href="{{route('companies.edit', $company->id)}}" class="btn btn-warning mr-1">Edit</a>
                                                    <form action="{{route('companies.destroy', $company->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>

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

