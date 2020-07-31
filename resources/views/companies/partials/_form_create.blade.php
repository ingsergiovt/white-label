<div class="form-row">
    <div class="col-12">
        <h4> Data Company Session</h4>
    </div>

    <div class="form-group col-md-12">
        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address*') }}</label>

        <div class="">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="password" class="col-form-label text-md-right">{{ __('Password*') }}</label>

        <div class="">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password*') }}</label>

        <div class="">
            <input id="password-confirm" type="password"
            class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </div>

</div>
<hr>
<div class="form-row">
    {{-- <img src="" alt=""> --}}
    <div class="col-12">
        <h4>Company Data</h4>
    </div>
    <div class="col-12">
        <div class="form-row">
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <div class="form-group">
                    <div style="width: 130px; height:130px; border:1px solid black"></div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Name*</label>
                        <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror " placeholder="Name"
                            value="{{ old('name')}}">
                            @error('name')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                    </div>

                    <div class="form-group col-md-12">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control @error('phone')@enderror" placeholder="Phone"
                            value="{{ old('phone')}}">
                            @error('phone')@enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="contact_phone">Contact Phone</label>
                <input type="text" name="contact_phone" id="contact_phone"
                class="form-control @error('contact_phone')@enderror" placeholder="Contact Phone"
                    value="{{ old('Contact Phone')}}">
                    @error('contact_phone')@enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="logo">Logo</label>
                <br>
                <input type="file" name="logo" id="logo"
                class=" @error('logo')@enderror" placeholder="Contact Phone"
                    value="{{ old('logo')}}">
                    @error('logo')@enderror
            </div>
        </div>
    </div>
</div>




