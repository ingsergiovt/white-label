

    <div class="form-group row">
        <label for="first_name" class="col-sm-4 col-form-label">FIRST NAME*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="first_name" name="first_name"
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
            <input type="text" class="form-control form-control-sm" id="middlename" name="middlename"
            value="@isset($quote) {{ $quote->middlename }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname" class="col-sm-4 col-form-label">LAST NAME*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="lastname" name="lastname"
            value="@isset($quote) {{ $quote->lastname }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="street" class="col-sm-4 col-form-label">STREET ADDRESS*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="street" name="street"
            value="@isset($quote) {{ $quote->street }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="city" class="col-sm-4 col-form-label">CITY*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="city" name="city"
            value="@isset($quote) {{ $quote->city }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="state" class="col-sm-4 col-form-label">STATE*</label>
        <div class="col-sm-8">
            <select class="custom-select custom-select-sm" id="state" name="state">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->state == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->state == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->state == 3) selected @endif @endisset >Option 3</option>
                <option value="3" @isset($quote) @if($quote->state == 4) selected @endif @endisset >Option 4</option>
            </select>

            <div class="invalid-feedback">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="zipvehicle" class="col-sm-4 col-form-label">ZIP VEHICLE GARAGED*</label>
        <div class="col-sm-2">
            <input type="text" class="form-control form-control-sm" id="zipvehicle" name="zipvehicle"
            value="@isset($quote) {{ $quote->middlename }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">E-MAIL*</label>
        <div class="col-sm-8">
            <input type="email" class="form-control form-control-sm" id="email" name="email"
            value="@isset($quote) {{ $quote->email }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
            <small id="passwordHelpBlock" class="form-text text-muted">
                Your e-mail address is necessary in order to retrieve your information online after you save it. your e-mail address will not be sold to third parties.
            </small>
        </div>
    </div>

    <div class="form-group row no-gutters">
        <label for="homephone_cod1" class="col-sm-4 col-form-label">HOME PHONE*</label>
        (
        <div class="col-10 col-sm-2 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="homephone_cod1" name="homephone_cod1"
            value="@isset($quote) {{ $quote->homephone_cod1 }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        ) -
        <div class="col-10 col-sm-2 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="homephone_cod2" name="homephone_cod2"
            value="@isset($quote) {{ $quote->homephone_cod2 }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        -
        <div class="col-10 col-sm-2">
            <input type="text" class="form-control form-control-sm" id="homephone_cod3" name="homephone_cod3"
            value="@isset($quote) {{ $quote->homephone_cod3 }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row no-gutters">
        <label for="workphone_cod1" class="col-sm-4 col-md-4 col-form-label">WORK PHONE*</label>
        (
        <div class="col-10 col-sm-1 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="workphone_cod1" name="workphone_cod1"
            value="@isset($quote) {{ $quote->workphone_cod1 }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        ) -
        <div class="col-10 col-sm-1 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="workphone_cod2" name="workphone_cod2"
            value="@isset($quote) {{ $quote->workphone_cod2 }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        -
        <div class="col-10 col-sm-1 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="workphone_cod3" name="workphone_cod3"
            value="@isset($quote) {{ $quote->workphone_cod3 }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-sm-2 col-md-4 pl-0 d-flex">
            <span class="">Ext: </span>
            <div class="form-row no-gutters">
                <div class="col-sm-12 col-md-4">
                    <input type="text" class="form-control form-control-sm" id="workphone_cod_ext" name="workphone_cod_ext"
                    value="@isset($quote) {{ $quote->workphone_cod_ext }} @endisset">
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="form-group row">
        <label for="refered" class="col-sm-4 col-form-label">REFERRED BY</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="refered" name="refered">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->refered == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->refered == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->refered == 3) selected @endif @endisset >Option 3</option>
                <option value="3" @isset($quote) @if($quote->refered == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="promo_code" class="col-sm-4 col-form-label">AGENT NAME OR PROMO CODE</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" id="promo_code" name="promo_code"
            value="@isset($quote) {{ $quote->promo_code }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="insurance_carrier" class="col-sm-4 col-form-label">HAVE PRIOR INSURANCE FROM CARRIER*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="insurance_carrier" name="insurance_carrier">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->insurance_carrier == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->insurance_carrier == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->insurance_carrier == 3) selected @endif @endisset >Option 3</option>
                <option value="3" @isset($quote) @if($quote->insurance_carrier == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="other_carrier" class="col-sm-4 col-form-label">IF OTHER IS SELECTED PLEASE FILL THE CARRIER'S</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="other_carrier" name="other_carrier"
            value="@isset($quote) {{ $quote->other_carrier }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <h5>NAME</h5>

    <div class="form-group row">
        <label for="insurance_with_carrier" class="col-sm-4 col-form-label">HAVE INSURANCE WITH THAT CARRIER FOR*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="insurance_with_carrier" name="insurance_with_carrier">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->insurance_with_carrier == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->insurance_with_carrier == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->insurance_with_carrier == 3) selected @endif @endisset >Option 3</option>
                <option value="3" @isset($quote) @if($quote->insurance_with_carrier == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="other_insurance_carrier" class="col-sm-4 col-form-label">IF OTHER IS SELECTED PLEASE FILL THE CARRIER'S</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="other_insurance_carrier" name="other_insurance_carrier"
            value="@isset($quote) {{ $quote->other_insurance_carrier }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row no-gutters">
        <label for="policy_month" class="col-sm-5 col-form-label">POLICY ENDS ON*</label>
        <div class="col-12 col-md-2  mb-3 mb-md-3">
            <select class="form-control form-control-sm" id="policy_month" name="policy_month">
                <option value="">Month</option>
                <option value="1" @isset($quote) @if($quote->policy_month == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->policy_month == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->policy_month == 3) selected @endif @endisset >Option 3</option>
                <option value="3" @isset($quote) @if($quote->policy_month == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12 col-md-2 mb-3 mb-md-3">
            <select class="form-control form-control-sm" id="policy_day" name="policy_day">
                <option value="">Day</option>
                <option value="1" @isset($quote) @if($quote->policy_day == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->policy_day == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->policy_day == 3) selected @endif @endisset >Option 3</option>
                <option value="3" @isset($quote) @if($quote->policy_day == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12 col-md-2">
            <input type="text" class="form-control form-control-sm" id="policy_year" name="policy_year" placeholder="YYYY"
            value="@isset($quote) {{ $quote->policy_year }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="number_licensed_drivers" class="col-sm-4 col-form-label">NUMBER OF LICENSED DRIVERS*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="number_licensed_drivers" name="number_licensed_drivers">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->number_licensed_drivers == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->number_licensed_drivers == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->number_licensed_drivers == 3) selected @endif @endisset >Option 3</option>
                <option value="3" @isset($quote) @if($quote->number_licensed_drivers == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="number_vehicles" class="col-sm-4 col-form-label">NUMBER OF VEHICLES*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="number_vehicles" name="number_vehicles">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->number_vehicles == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->number_vehicles == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->number_vehicles == 3) selected @endif @endisset >Option 3</option>
                <option value="3" @isset($quote) @if($quote->number_vehicles == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="recidence_type" class="col-sm-4 col-form-label">RESIDENCE TYPE</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="recidence_type" name="recidence_type">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->recidence_type == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->recidence_type == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->recidence_type == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->recidence_type == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    @if(isset($quote))
        <input type="hidden" name="form_code" id="form_code" value="{{$quote->code}}">
    @endif


