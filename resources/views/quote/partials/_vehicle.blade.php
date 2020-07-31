
    <div class="form-group row">
        <label for="vehicle_year" class="col-sm-4 col-form-label">YEAR*</label>
        <div class="col-sm-8">
            <select class="custom-select custom-select-sm" id="vehicle_year" name="vehicle_year">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->vehicle_year == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->vehicle_year == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->vehicle_year == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->vehicle_year == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="vehicle_make" class="col-sm-4 col-form-label">MAKE*</label>
        <div class="col-sm-8">
            <select class="custom-select custom-select-sm" id="vehicle_make" name="vehicle_make">
                @isset($quote) @if($quote->vehicle_make == 1) <option value="1">Make Option 1</option> @endif @endisset
                @isset($quote) @if($quote->vehicle_make == 2) <option value="2">Make Option 2</option> @endif @endisset
                @isset($quote) @if($quote->vehicle_make == 3) <option value="3">Make Option 3</option> @endif @endisset
                @isset($quote) @if($quote->vehicle_make == 4) <option value="3">Make Option 4</option> @endif @endisset
            </select>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="vehicle_model" class="col-sm-4 col-form-label">MODEL*</label>
        <div class="col-sm-8">
            <select class="custom-select custom-select-sm" id="vehicle_model" name="vehicle_model">
                @isset($quote) @if($quote->vehicle_model == 1) <option value="1">Model Option 1</option> @endif @endisset
                @isset($quote) @if($quote->vehicle_model == 2) <option value="2">Model Option 2</option> @endif @endisset
                @isset($quote) @if($quote->vehicle_model == 3) <option value="3">Model Option 3</option> @endif @endisset
                @isset($quote) @if($quote->vehicle_model == 4) <option value="3">Model Option 4</option> @endif @endisset
            </select>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="vehicle_number_id" class="col-sm-4 col-form-label">VEHICLE ID #*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="vehicle_number_id" name="vehicle_number_id"
            value="@isset($quote){{$quote->vehicle_number_id}}@endisset">
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="vehicle_anual_milage" class="col-sm-4 col-form-label">ANNUAL MILAGE(EST)*</label>
        <div class="col-sm-8">
            <input type="number" min="1" class="form-control form-control-sm" id="vehicle_anual_milage" name="vehicle_anual_milage"
            value="@isset($quote){{$quote->vehicle_anual_milage}}@endisset">
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="vehicle_use" class="col-sm-4 col-form-label">VEHICLE USE*</label>
        <div class="col-sm-8">
            <select class="custom-select custom-select-sm" id="vehicle_use" name="vehicle_use">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->vehicle_use == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->vehicle_use == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->vehicle_use == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->vehicle_use == 4) selected @endif @endisset >Option 4</option>
            </select>

            <div class="invalid-feedback">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="vehicle_miles_work" class="col-sm-4 col-form-label">MILES TO WORK/SCHOOL (1 WAY)</label>
        <div class="col-sm-8">
            <select class="custom-select custom-select-sm" id="vehicle_miles_work" name="vehicle_miles_work">
                <option value="">Default select</option>
                <option value="1"  @isset($quote) @if($quote->vehicle_miles_work == 1) selected @endif @endisset >Option 1</option>
                <option value="2"  @isset($quote) @if($quote->vehicle_miles_work == 2) selected @endif @endisset >Option 2</option>
                <option value="3"  @isset($quote) @if($quote->vehicle_miles_work == 3) selected @endif @endisset >Option 3</option>
                <option value="4"  @isset($quote) @if($quote->vehicle_miles_work == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="vehicle_category" class="col-sm-4 col-form-label">ANTITHEFT DEVICE CATEGORY *</label>
        <div class="col-sm-8">
            <select class="custom-select custom-select-sm" id="vehicle_category" name="vehicle_category">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->vehicle_category == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->vehicle_category == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->vehicle_category == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->vehicle_category == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="vehicle_wheel_drive" class="col-sm-4 col-form-label">IS VEHICLE FOUR WHEEL DRIVE*</label>
        <div class="col-10 col-sm-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="vehicle_wheel_drive_yes" name="vehicle_wheel_drive" class="custom-control-input" value="yes"
                @isset($quote) @if($quote->vehicle_wheel_drive == 'yes') checked @endif @endisset>
                <label class="custom-control-label" for="vehicle_wheel_drive_yes">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="vehicle_wheel_drive_no" name="vehicle_wheel_drive" class="custom-control-input" value="no"
                @isset($quote) @if($quote->vehicle_wheel_drive == 'no') checked @endif @endisset>
                <label class="custom-control-label" for="vehicle_wheel_drive_no">No</label>
            </div>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="vehicle_body_type" class="col-sm-4 col-form-label">BODY TYPE*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="vehicle_body_type" name="vehicle_body_type">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->vehicle_body_type == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->vehicle_body_type == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->vehicle_body_type == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->vehicle_body_type == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>


    <div class="form-group row">
        <label for="vehicle_cylinders" class="col-sm-4 col-form-label">CYLINDERS*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="vehicle_cylinders" name="vehicle_cylinders">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->vehicle_cylinders == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->vehicle_cylinders == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->vehicle_cylinders == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->vehicle_cylinders == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="vehicle_damage" class="col-sm-4 col-form-label">DOES VEHICLE HAVE EXISTING DAMAGE OR NEEDS REPAIRS*</label>
        <div class="col-sm-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="vehicle_wheel_yes" name="vehicle_damage" class="custom-control-input" value="yes"
                @isset($quote) @if($quote->vehicle_damage == 'yes') checked @endif @endisset>
                <label class="custom-control-label" for="vehicle_wheel_yes">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="vehicle_wheel_no" name="vehicle_damage" class="custom-control-input" value="no"
                @isset($quote) @if($quote->vehicle_damage == 'no') checked @endif @endisset>
                <label class="custom-control-label" for="vehicle_wheel_no">No</label>
            </div>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>

    @if(isset($quote))
        <input type="hidden" name="form_code" id="form_code" value="{{$quote->code}}">
    @endif



@push('scripts')
    <script>

        document.getElementById('vehicle_year').addEventListener('change', () => {
            $('#vehicle_make').html('');
            $('#vehicle_model').html('')
            $('#vehicle_make').append(
            `
                <option value="">Default select</option>
                <option value="1">Make Option 1</option>
                <option value="2">Make Option 2</option>
                <option value="3">Make Option 3</option>
                <option value="3">Make Option 4</option>
            `
            )
        })

        document.getElementById('vehicle_make').addEventListener('change', () => {
            $('#vehicle_model').html('')
            $('#vehicle_model').append(
            `
                <option value="">Default select</option>
                <option value="1">Model Option 1</option>
                <option value="2">Model Option 2</option>
                <option value="3">Model Option 3</option>
                <option value="3">Model Option 4</option>
            `
            )
        })

    </script>
@endpush
