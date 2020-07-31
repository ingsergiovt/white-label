@extends('layouts.auth')
@section('content')

<div class="content-header py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                {{-- <h1 >Dashboard</h1> --}}
                <h1 class="m-0 text-dark">Create company</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('companies.index')}}">Companies list</a></li>
                    <li class="breadcrumb-item active">Create company</li>
                </ol>
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
                        <form action="{{route('companies.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('admin.companies.partials._form_create')
                            <div class="form-row">
                                <div class="col-md-12 text-right ">
                                    <button class="btn btn-primary btn-block">Send</button>
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



