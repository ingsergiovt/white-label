@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }} --}}


                        <h3> Hello! {{auth()->user()->name}}</h3>
                        <h4>
                            Use this link for your clients to create quotes <br>
                            <a href="{{route('create.quote.company.form', auth()->user()->slug_form)}}" target="_blank">{{url('form/'.auth()->user()->slug_form)}}</a>
                        </h4>


                        <h3>My Quotes</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($quotes as $quote)
                                        @if($quote->email == auth()->user()->email)
                                            <tr>
                                                <td>{{ $quote->first_name }}</td>
                                                <td>{{ $quote->email }}</td>
                                                <td>
                                                    <a href="{{route('quote.show', $quote->code)}}" class="btn btn-primary">Show</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="3" align="center">
                                                No records
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <hr>

                        <h3>Quotes from your customers</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($quotes as $quote)
                                        @if($quote->company_id == auth()->user()->company->id)
                                            <tr>
                                                <td>{{ $quote->first_name }}</td>
                                                <td>{{ $quote->email }}</td>
                                                <td>
                                                    <a href="{{route('quote.show', $quote->code)}}" class="btn btn-primary">Show</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="3" align="center">
                                                No records
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
@endsection
