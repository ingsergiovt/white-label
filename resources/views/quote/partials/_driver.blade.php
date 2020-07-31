
    <div class="form-group row">
        <label for="first_name" class="col-sm-4 col-form-label">FIRST NAME*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="first_name_driver" name="first_name"
            value="@isset($quote) {{ $quote->first_name }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
            <small id="passwordHelpBlock" class="form-text text-muted">
                Your first and last name should reflect your legal name as registered on the vehicles you own and for which you wish to purchase insurance.
            </small>
        </div>
    </div>
    <div class="form-group row">
        <label for="middlename" class="col-sm-4 col-form-label">MIDDLE NAME</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="middlename_driver" name="middlename"
            value="@isset($quote) {{ $quote->middlename }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname" class="col-sm-4 col-form-label">LAST NAME*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="lastname_driver" name="lastname"
            value="@isset($quote) {{ $quote->middlename }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row no-gutters">
        <label for="birth_month" class="col-sm-5 col-form-label">DATE OF BIRTH*</label>
        <div class="col-12 col-md-2  mb-3 mb-md-3">
            <select class="form-control form-control-sm" id="birth_month" name="birth_month">
                <option value="">Month</option>
                <option value="1" @isset($quote) @if($quote->birth_month == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->birth_month == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->birth_month == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->birth_month == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12 col-md-2 mb-3 mb-md-3">
            <select class="form-control form-control-sm" id="birth_day" name="birth_day">
                <option value="">Day</option>
                <option value="1" @isset($quote) @if($quote->birth_day == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->birth_day == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->birth_day == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->birth_day == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12 col-md-2">
            <input type="text" class="form-control form-control-sm" id="birth_year" name="birth_year" placeholder="YYYY"
            value="@isset($quote) {{ $quote->birth_year }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="relationship" class="col-sm-4 col-form-label">RELATIONSHIP TO APPLICANT*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="relationship" name="relationship">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->relationship == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->relationship == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->relationship == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->relationship == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="sex" class="col-sm-4 col-form-label">SEX*</label>
        <div class="col-sm-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="male" name="sex" class="custom-control-input" value="male" checked>
                <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="female" name="sex" class="custom-control-input" value="female">
                <label class="custom-control-label" for="female">Female</label>
            </div>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="driver_license" class="col-sm-4 col-form-label">DRIVER LICENSE #</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="driver_license" name="driver_license"
            value="@isset($quote) {{ $quote->driver_license }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="issued_in" class="col-sm-4 col-form-label">ISSUED IN*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="issued_in" name="issued_in">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->issued_in == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->issued_in == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->issued_in == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->issued_in == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="years_license_co" class="col-sm-4 col-form-label">YEARS LICENSED IN CO *</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="years_license_co" name="years_license_co">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->years_license_co == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->years_license_co == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->years_license_co == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->years_license_co == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="years_license_us" class="col-sm-4 col-form-label">YEARS LICENSED IN US*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="years_license_us" name="years_license_us">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->years_license_us == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->years_license_us == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->years_license_us == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->years_license_us == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="age_first_licensed" class="col-sm-4 col-form-label">AGE FIRST LICENSED*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="age_first_licensed" name="age_first_licensed"
            value="@isset($quote) {{ $quote->age_first_licensed }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="marital_status" class="col-sm-4 col-form-label">MARITAL STATUS*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="marital_status" name="marital_status">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->marital_status == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->marital_status == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->marital_status == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->marital_status == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="occupation" class="col-sm-4 col-form-label">OCCUPATION*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="occupation" name="occupation">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->occupation == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->occupation == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->occupation == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->occupation == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="years_currente_employer" class="col-sm-4 col-form-label">YEARS WITH CURRENT EMPLOYER*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="years_currente_employer" name="years_currente_employer">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->years_currente_employer == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->years_currente_employer == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->years_currente_employer == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->years_currente_employer == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="primary_vehicle" class="col-sm-4 col-form-label">PRIMARY VEHICLE DRIVEN*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="primary_vehicle" name="primary_vehicle">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->primary_vehicle == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->primary_vehicle == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->primary_vehicle == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->primary_vehicle == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="current_license_status" class="col-sm-4 col-form-label">CURRENT LICENSE STATUS*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="current_license_status" name="current_license_status">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->current_license_status == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->current_license_status == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->current_license_status == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->current_license_status == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label for="dui_dwi_7_years" class="col-sm-4 col-form-label">DUI OR DWI LAST 7 YEARS*</label>
        <div class="col-sm-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="dui_dwi_7_years_yes" name="dui_dwi_7_years" class="custom-control-input" value="yes"
                @isset($quote) @if($quote->dui_dwi_7_years == 'yes') checked @endif @endisset>
                <label class="custom-control-label" for="dui_dwi_7_years_yes" >Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="dui_dwi_7_years_no" name="dui_dwi_7_years" class="custom-control-input" value="no"
                @isset($quote) @if($quote->dui_dwi_7_years == 'no') checked @endif @endisset>
                <label class="custom-control-label" for="dui_dwi_7_years_no">No</label>
            </div>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="dui_dwi_10_years" class="col-sm-4 col-form-label">DUI OR DWI LAST 10 YEARS</label>
        <div class="col-sm-8">
            <div class="custom-control custom-check custom-control-inline">
                <input type="checkbox" id="dui_dwi_10_years_yes" name="dui_dwi_10_years" class="custom-control-input" value="yes"
                @isset($quote) @if($quote->dui_dwi_10_years == 'yes') checked @endif @endisset>
                <label class="custom-control-label" for="dui_dwi_10_years_yes">Yes</label>
            </div>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="license_suspended" class="col-sm-4 col-form-label">HAS YOUR LICENSE BEEN SUSPENDED
            OR REVOKED IN THE LAST 3 YEARS*</label>
        <div class="col-sm-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="license_suspended_yes" name="license_suspended" class="custom-control-input" value="yes"
                @isset($quote) @if($quote->license_suspended == 'yes') checked @endif @endisset>
                <label class="custom-control-label" for="license_suspended_yes">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="license_suspended_no" name="license_suspended" class="custom-control-input" value="no"
                @isset($quote) @if($quote->license_suspended == 'no') checked @endif @endisset>
                <label class="custom-control-label" for="license_suspended_no">No</label>
            </div>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="license_revoked" class="col-sm-4 col-form-label">OR REVOKED IN THE LAST 3 YEARS*</label>
        <div class="col-sm-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="license_revoked_yes" name="license_revoked" class="custom-control-input" value="yes"
                @isset($quote) @if($quote->license_revoked == 'yes') checked @endif @endisset>
                <label class="custom-control-label" for="license_revoked_yes">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="license_revoked_no" name="license_revoked" class="custom-control-input" value="no"
                @isset($quote) @if($quote->license_revoked == 'no') checked @endif @endisset>
                <label class="custom-control-label" for="license_revoked_no">No</label>
            </div>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="require_sr22" class="col-sm-4 col-form-label">DO YOU REQUIRE A SR-22*</label>
        <div class="col-sm-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="require_sr22_yes" name="require_sr22" class="custom-control-input" value="yes"
                @isset($quote) @if($quote->require_sr22 == 'yes') checked @endif @endisset>
                <label class="custom-control-label" for="require_sr22_yes">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="require_sr22_no" name="require_sr22" class="custom-control-input" value="no"
                @isset($quote) @if($quote->require_sr22 == 'no') checked @endif @endisset>
                <label class="custom-control-label" for="require_sr22_no">No</label>
            </div>
            <div class="invalid-feedback">

            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="violations" class="col-sm-4 col-form-label">NUMBER OF VIOLATIONS IN THE LAST 3 YEARS*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="violations" name="violations">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->violations == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->violations == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->violations == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->violations == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="accidents" class="col-sm-4 col-form-label">NUMBER OF ACCIDENTS IN THE LAST 3 YEARS*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="accidents" name="accidents">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->accidents == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->accidents == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->accidents == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->accidents == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>



    <div class="form-group row">
        <label for="ssn" class="col-sm-4 col-form-label">SSN #</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="ssn" name="ssn"
            value="@isset($quote) {{ $quote->ssn }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label for="rate_credit" class="col-sm-4 col-form-label">RATE YOUR CREDIT</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="rate_credit" name="rate_credit">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->rate_credit == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->rate_credit == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->rate_credit == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->rate_credit == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    @if(isset($quote))
        <input type="hidden" name="form_code" id="form_code" value="{{$quote->code}}">
    @endif
