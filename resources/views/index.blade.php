@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if($message = Session::get('message'))
                <div class="alert alert-danger mb-3" role="alert">
                    {{$message}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Enter the quote code</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('edit.form')}}">
                        <div class="form-group">
                            <label for="code">Code</label>

                            <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" id="code" placeholder="xCdpoa21" maxlength="8">

                            @error('code')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group text-right">
                            <a href="{{route('create.form')}}" class="pr-4">Create a new quote</a>
                            <button class="btn btn-primary">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
