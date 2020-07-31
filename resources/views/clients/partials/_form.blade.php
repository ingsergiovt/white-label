<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror " placeholder="Name"
            value="{{ old('name', $client->name )}}" required>
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="lastname">Last name</label>
        <input type="text" name="last_name" id="lastname" class="form-control @error('last_name')@enderror" placeholder="Lastname"
            value="{{ old('last_name', $client->last_name )}}" required>
            @error('last_name')@enderror
    </div>
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control @error('email')@enderror" placeholder="email"
            value="{{ old('email', $client->email )}}" required>
            @error('email')@enderror
    </div>
    <div class="form-group col-md-6">
        <label for="name">Cell phone</label>
        <input type="text" name="cell_phone" id="cell_phone" class="form-control @error('cell_phone')@enderror" placeholder="Cell Phone"
            value="{{ old('cell_phone', $client->cell_phone )}}" required>
            @error('cell_phone')@enderror
    </div>
</div>


