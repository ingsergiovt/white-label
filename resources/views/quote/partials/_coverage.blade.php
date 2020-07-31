
    <div class="form-group row">
        <label for="bi" class="col-sm-4 col-form-label">BI*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="bi" name="bi">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->bi == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->bi == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->bi == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->bi == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="pd" class="col-sm-4 col-form-label">PD*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="pd" name="pd">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->pd == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->pd == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->pd == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->pd == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="medpm" class="col-sm-4 col-form-label">MEDPM</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="medpm" name="medpm">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->medpm == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->medpm == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->medpm == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->medpm == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="umbi" class="col-sm-4 col-form-label">UMBI</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="umbi" name="umbi">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->umbi == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->umbi == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->umbi == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->umbi == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="umpd" class="col-sm-4 col-form-label">UMPD</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="umpd" name="umpd">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->umpd == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->umpd == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->umpd == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->umpd == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="comp" class="col-sm-4 col-form-label">COMP</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="comp" name="comp">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->comp == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->comp == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->comp == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->comp == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="coll" class="col-sm-4 col-form-label">COLL</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="coll" name="coll">
                <option value="">Default select</option>
                <option value="1" @isset($quote) @if($quote->coll == 1) selected @endif @endisset >Option 1</option>
                <option value="2" @isset($quote) @if($quote->coll == 2) selected @endif @endisset >Option 2</option>
                <option value="3" @isset($quote) @if($quote->coll == 3) selected @endif @endisset >Option 3</option>
                <option value="4" @isset($quote) @if($quote->coll == 4) selected @endif @endisset >Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    @if(isset($quote))
        <input type="hidden" name="form_code" id="form_code" value="{{$quote->code}}">
    @endif

