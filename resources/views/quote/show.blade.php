

{{-- <script>
    // console.log(localStorage.getItem("form"))
    {
        const form = JSON.parse(localStorage.getItem('form'))
        if(form.complete){

            window.location.href = "{{route('thanks')}}";

            // let route = "{{ route('get.form', ['code' => ':code']) }}"
            // let url = route.replace(':code', form.id);
            // console.log(form.id)
            // window.location.href = url;

        }
    }


</script> --}}

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4> Show Quote Code Number: {{$quote->code}} </h4>
                    </div>

                    <nav>
                        <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-profile-info" data-toggle="tab" href="#nav-profile-tab" >
                                Profile
                            </a>
                            <a class="nav-item nav-link" id="nav-vehicle-info" data-toggle="tab" href="#nav-vehicle-tab">
                                Vehicle Info
                            </a>
                            <a class="nav-item nav-link" id="nav-driver-info" data-toggle="tab" href="#nav-driver-tab">
                                Driver Info
                            </a>
                            <a class="nav-item nav-link" id="nav-coverage-info" data-toggle="tab" href="#nav-coverage-tab">
                                Coverage Info
                            </a>
                        </div>
                    </nav>

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <span>Fields marked (*) are mandatory.</span>
                        </div>
                    </div>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-profile-tab" role="tabpanel" aria-labelledby="nav-profile-info">
                            <div class="row mt-2">
                                <div class="col-md-12 px-5">
                                    <form action="{{route('form.profile.store')}}" class="mt-3 needs-validation " id="form_profile">
                                        @csrf
                                        @include('quote.partials._profile')
                                    </form>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12 d-flex justify-content-around py-4">
                                    {{-- <button class="btn btn-warning save" name="save_later" name="save" value="">Save to Return Later</button>
                                    <button class="btn btn-primary btnNext" id="first_continue">Continue</button> --}}
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-vehicle-tab" role="tabpanel" aria-labelledby="nav-vehicle-info">
                            <div class="row">
                                <div class="col-md-12 px-5">
                                    <form action="{{route('form.vehicle.store')}}" class="mt-3 needs-validation " id="form_vehicle">
                                        @csrf
                                        @include('quote.partials._vehicle')
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 d-flex justify-content-around py-4">
                                    {{-- <button class="btn btn-secondary btnPrevious" >Previous</button>
                                    <button class="btn btn-warning save"  name="save" value="">Save to Return Later</button>
                                    <button class="btn btn-primary btnNext" id="second_continue">Continue</button> --}}
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-driver-tab" role="tabpanel" aria-labelledby="nav-driver-info">
                            <div class="row">
                                <div class="col-md-12 px-5">
                                    <form action="{{route('form.driver.store')}}" class="mt-3 needs-validation " id="form_driver">
                                        @csrf
                                        @include('quote.partials._driver')
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 d-flex justify-content-around py-4">
                                    {{-- <button class="btn btn-secondary btnPrevious" >Previous</button>
                                    <button class="btn btn-warning save" name="save" value="">Save to Return Later</button>
                                    <button class="btn btn-primary btnNext" id="third_continue">Continue</button> --}}
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-coverage-tab" role="tabpanel" aria-labelledby="nav-coverage-info">
                            <div class="row">
                                <div class="col-md-12 px-5">
                                    <form action="{{route('form.coverage.store')}}" class="mt-3 needs-validation " id="form_coverage">
                                        @csrf
                                        @include('quote.partials._coverage')
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-3">

                                <div class="col-md-12 d-flex justify-content-around py-4">
                                    {{-- <button class="btn btn-secondary btnPrevious" >Previous</button>
                                    <button class="btn btn-warning save" name="save" value="">Save to Return Later</button>
                                    <button class="btn btn-primary btnNext" id="get_quote">Get Quote</button> --}}
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @section('scripts')
    <script>

        const firstContinue     = document.getElementById('first_continue');
        const secondContinue    = document.getElementById('second_continue');
        const thirdContinue     = document.getElementById('third_continue');
        const getCuote          = document.getElementById('get_quote');


        const btnProfile    = document.getElementById('nav-profile-info');
        const btnVehicle    = document.getElementById('nav-vehicle-info');
        const btnDriver     = document.getElementById('nav-driver-info');
        const btnCovergae   = document.getElementById('nav-coverage-info');

        const btnSave       = $('.save');

        // btnSave.addEventListener('click', function(){
        //     alert('click')
        // })

        btnSave.click(function(){
            $(this).value = true;
            console.log($('.nav-pills > .active'))
        })


        // const nav-vehicle-info = document.getElementById('nav-vehicle-info')

        const validateInput = (id_name, msg) => {

            const input = document.getElementById(id_name);
                input.classList.add('is-invalid');
                input.nextElementSibling.innerHTML = msg;
            // if(input.value == ""){
            //     return false;
            // }else{
            //     input.classList.remove('is-invalid')
            //     input.classList.add('is-valid')
            //     return true;
            // }

        }

        const valdateForm = (inputs) => {
            inputs.forEach(input => {
                validateInput(input)
            });
        }

        const submiterProfileForm = (form) => {
            // validateInput('name')
            return new Promise(function(resolver, rechazar){

                const formProfile = document.getElementById(form);
                const route = formProfile.action;
                const data = new FormData()
                const dataArray = $('#'+form).serializeArray();
                const token = document.getElementsByName('_token')[0].value;

                $.each(dataArray,function(key,input){
                    data.append(input.name,input.value);
                });

                // data.append(document.getElementById('vehicle_make').value)
                // data.append(document.getElementById('vehicle_model').value)

                $.ajax({
                    url: route,
                    data: data,
                    method: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp){

                        resolver(resp)

                    },
                    error:function(resp){

                        rechazar(resp)

                    },
                });
            })
        }

        const showErros = (resp) => {
            const json = resp.responseJSON.errors
            const classes = document.querySelectorAll('.is-invalid')
            if(classes.length > 0){
                classes.forEach(function(input){
                    input.classList.remove('is-invalid');
                })
            }

            for (const error in json) {
                validateInput(error, json[error][0]);
                // console.log(error, json[error][0])
            }
        }

        const replaceData = () => {

            document.getElementById('first_name_driver').value = document.getElementById('first_name').value
            document.getElementById('middlename_driver').value = document.getElementById('middlename').value
            document.getElementById('lastname_driver').value   = document.getElementById('lastname').value

        }



        const getForm = JSON.parse(localStorage.getItem('form'))
        console.log(getForm);

        btnVehicle.disabled = true;
        btnDriver.disabled = true;
        btnCovergae.disabled = true;

        btnProfile.disabled = false;

        if(getForm.profile){
            btnVehicle.disabled = false;
        }
        if(getForm.vehicle){
            btnDriver.disabled = false;
        }
        if(getForm.profile){
            btnCovergae.disabled = false;
        }


        // $('.btnNext').click(function(){
        //     $('.nav-pills > .active').next('a').trigger('click');
        // });

        $('.btnPrevious').click(function(){
            $('.nav-pills > .active').prev('a').trigger('click');
        });

        firstContinue.addEventListener('click', e => {

            submiterProfileForm('form_profile')
                .then(function(resp){
                    console.log(resp)
                    if(resp.success){

                        btnVehicle.disabled = false;
                        $('.nav-pills > .active').next('a').trigger('click');
                        console.log(resp);
                        localStorage.setItem("form_id", resp.code);

                    }
                })
                .catch(function(resp){
                    showErros(resp);
                })

            // const profileFormCompleted = getForm.profile
            // if(profileFormCompleted){
            //     $('.nav-pills > .active').next('a').trigger('click');
            // }else{

            // }

        });

        secondContinue.addEventListener('click', e => {
            const vehicleFormCompleted = getForm.vehicle

            submiterProfileForm('form_vehicle')
                .then(function(resp){
                    console.log(resp)
                    if(resp.success){

                        btnDriver.disabled = false;
                        getForm.vehicle = true;
                        localStorage.setItem("form", JSON.stringify(getForm));

                        $('.nav-pills > .active').next('a').trigger('click');

                        replaceData();

                        console.log(resp)
                    }
                })
                .catch(function(resp){
                    showErros(resp);
                })

            // if(vehicleFormCompleted){
            //     $('.nav-pills > .active').next('a').trigger('click');
            // }else{

            // }
        });

        thirdContinue.addEventListener('click', e => {

            submiterProfileForm('form_driver')
                .then(function(resp){
                    console.log(resp)
                    if(resp.success){

                        btnCovergae.disabled = false;
                        getForm.driver = true;
                        localStorage.setItem("form", JSON.stringify(getForm));
                        $('.nav-pills > .active').next('a').trigger('click');
                        console.log(resp, "success")

                    }
                })
                .catch(function(resp){
                    showErros(resp);
                })

            // if(driverFormCompleted){
            //     $('.nav-pills > .active').next('a').trigger('click');
            // }else{


            // }
        })


        getCuote.addEventListener('click', e => {

            submiterProfileForm('form_coverage')
                .then(function(resp){
                    console.log(resp)
                    if(resp.success){

                        getForm.coverage = true;
                        getForm.complete = true;
                        localStorage.setItem("form", JSON.stringify(getForm));
                        // console.log(resp, "success")

                        window.location.href = "{{route('thanks')}}";

                    }
                })
                .catch(function(resp){
                    showErros(resp);
                })

        });










    </script>
@endsection --}}
