@extends('layouts.auth')
@section('content')

<div class="content-header py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Profile</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-10 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('company.profile.update', $company->id)}}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            @include('companies.profile.partials._form')
                            <div class="form-row">
                                <div class="col-md-12 text-right ">
                                    <button class="btn btn-primary btn-block">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



