<div class="form-row">
    <div class="col-12 mb-3">
        <div class="from-group">
            <span class="h4">Url Quote Form: </span>
            <span class="h4">{{url('form/'.$company->slug_form)}}</span>
        </div>
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
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror " placeholder="Name"
                            value="{{ old('name', $company->user->name )}}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control @error('phone')@enderror" placeholder="Phone"
                            value="{{ old('phone', $company->phone )}}" required>
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
                    value="{{ old('contact_phone', $company->contact_phone)}}">
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


