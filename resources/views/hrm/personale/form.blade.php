<div class="row">
    <div class="col-md-6">
        <div class="form-group 	required">
            <label class="control-label" for="personalesid">ID Number</label>
            <div class="input-group">
                <input name="personalesid" type="text" id="personalesid"
                    class="form-control select {{ $errors->has('personalesid') ? ' is-invalid' : '' }}"
                    value="{{old('personalesid') ?? $personale->personalesid}}" onfocusout="validatepersonalesid()">
                @if ($errors->has('personalesid'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('personalesid') }}</strong>
                </span>
                @endif
                <span class="invalid-feedback" role="alert"></span>
            </div>

        </div>
        <div class="form-group required">
            <label class="control-label" for="firstname">First Name</label>
            <div class="input-group">
                <input name="firstname" type="text" id="firstname"
                    class="form-control select {{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                    value="{{old('firstname') ?? $personale->firstname}}" onfocusout="validatefirstname()">
                @if ($errors->has('firstname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('firstname') }}</strong>
                </span>
                @endif
                <span class="invalid-feedback" role="alert"></span>
            </div>
        </div>

        <div class="form-group required">
            <label class="control-label" for="fathername">Father Name</label>
            <div class="input-group">
                <input name="fathername" type="text" id="fathername"
                    class="form-control select {{ $errors->has('fathername') ? ' is-invalid' : '' }}"
                    value="{{old('fathername') ?? $personale->fathername}}" onfocusout="validatefathername()">
                @if ($errors->has('fathername'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('fathername') }}</strong>
                </span>
                @endif
                <span class="invalid-feedback" role="alert"></span>
            </div>
        </div>
        <div class="form-group required">
            <label class="control-label" for="gfathername">Father Name</label>
            <div class="input-group">
                <input name="gfathername" type="text" id="gfathername"
                    class="form-control select {{ $errors->has('gfathername') ? ' is-invalid' : '' }}"
                    value="{{old('gfathername') ?? $personale->gfathername}}" onfocusout="validategfathername()">
                @if ($errors->has('gfathername'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('gfathername') }}</strong>
                </span>
                @endif
                <span class="invalid-feedback" role="alert"></span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group required" >
                    <label class="control-label" for="sex">Sex</label>
                    <select name="sex" class="form-control select" id="sex" required>
                        {{-- <option class="dropup" value="">Select </option> --}}
                        <option class="dropup" value="1" selected> Male </option>
                        <option class="dropup" value="0"> Female </option>
                    </select>

                    <small class="form-text text-danger" id="error_sex"></small>

                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group required">
                    <label class="control-label" for="birthdate">Birth Date</label>

                    <div class="input-group"> <span class="input-group-addon"></span>
                        <input name="birthdate" type="text" id="birthdate"
                            class="form-control select {{ $errors->has('birthdate') ? ' is-invalid' : '' }}"
                            value="{{old('birthdate') ?? $personale->birthdate}}" onfocusout="validatebirthdate()">
                        <div class="input-group-append">
                            <button type="button" id="toggle1" class="input-group-text">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </button>
                        </div>
                        @if ($errors->has('birthdate'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('birthdate') }}</strong>
                        </span>
                        @endif
                        <span class="invalid-feedback" role="alert"></span>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label class="control-label" for="zone">Zone</label>

                    <div class="input-group">
                        <input name="zone" type="text" id="zone"
                            class="form-control select {{ $errors->has('zone') ? ' is-invalid' : '' }}"
                            value="{{old('zone') ?? $personale->zone}}" onfocusout="validateZone()">
                        @if ($errors->has('zone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('zone') }}</strong>
                        </span>
                        @endif
                        <span class="invalid-feedback" role="alert"></span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">

                <div class="form-group">
                    <label class="control-label" for="woreda">Worda</label>

                    <div class="input-group"> <span class="input-group-addon"></span>
                        <input name="woreda" type="text" id="woreda"
                            class="form-control select {{ $errors->has('woreda') ? ' is-invalid' : '' }}"
                            value="{{old('woreda') ?? $personale->woreda}}" onfocusout="validateWoreda()">
                        @if ($errors->has('woreda'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('woreda') }}</strong>
                        </span>
                        @endif
                        <span class="invalid-feedback" role="alert"></span>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="col-md-6">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="control-label" for="kebele"> Kebele</label>

                    <div class="input-group"> <span class="input-group-addon"></span>
                        <input name="kebele" type="text" id="kebele"
                            class="form-control select {{ $errors->has('kebele') ? ' is-invalid' : '' }}"
                            value="{{old('kebele') ?? $personale->kebele}}" onfocusout="validateKebele()">
                        @if ($errors->has('kebele'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('kebele') }}</strong>
                        </span>
                        @endif
                        <span class="invalid-feedback" role="alert"></span>
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="form-group">
                    <label class="control-label" for="housenumber"> House Number</label>

                    <div class="input-group"> <span class="input-group-addon"></span>
                        <input name="housenumber" type="text" id="housenumber"
                            class="form-control select {{ $errors->has('housenumber') ? ' is-invalid' : '' }}"
                            value="{{old('housenumber') ?? $personale->housenumber}}" onfocusout="validatehousenumber()">
                        @if ($errors->has('housenumber'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('housenumber') }}</strong>
                        </span>
                        @endif
                        <span class="invalid-feedback" role="alert"></span>
                    </div>

                </div>
            </div>
        </div>

        <div class="form-group required">
            <label class="control-label" for="mobile"> Mobileile Number</label>

            <div class="input-group"> <span class="input-group-addon"></span>
                <input name="mobile" type="text" id="mobile"
                    class="form-control select {{ $errors->has('mobile') ? ' is-invalid' : '' }}"
                    value="{{old('mobile') ?? $personale->mobileile}}" onfocusout="validateMobile()">
                @if ($errors->has('mobile'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('mobile') }}</strong>
                </span>
                @endif
                <span class="invalid-feedback" role="alert"></span>
            </div>
        </div>
        <div class="form-group required">
            <label class="control-label"> Hired Date</label>
            <div class="input-group ">
                <input type="text" class="form-control form_datetime" name="hireddate" id="hireddate"
                    value="{{old('hireddate') ?? $personale->hireddate}}" onfocusout="validatehireddate()">
                <div class="input-group-append">
                    <button type="button" id="toggle" class="input-group-text">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <br>
            @if ($errors->has('hireddate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('hireddate') }}</strong>
            </span>
            @endif
            <span class="invalid-feedback" role="alert"></span>
        </div>

        <div class="form-group required">
            <label class="control-label" for="departement">Departement</label>
            <select name="department_id" class="form-control {{ $errors->has('departement') ? ' is-invalid' : '' }} select"
                id="department_id" value="" onfocusout="validatedepartement()">
                <option class="dropup" value="" > Select One</option>
                @foreach ($departements as $departement)
                   <option class="dropup" value="{{$departement->id}}"
                    {{ $departement->id == $personale->departement_id ? 'selected' : '' }}> {{ $departement->departementid}}
                </option>

                @endforeach
            </select>
            @if ($errors->has('departement'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('departement') }}</strong>
            </span>
            @endif
            <span class="invalid-feedback" role="alert"></span>
        </div>

        <div class="form-group required">
            <label class="control-label" for="job">Operation ID</label>
            <select name="job_id" class="form-control {{ $errors->has('job') ? ' is-invalid' : '' }} select"
                id="job_id" value="" onfocusout="validatejob()">
                <option class="dropup" value="" > Select One</option>
                @foreach ($jobs as $job)
                   <option class="dropup" value="{{$job->id}}"
                    {{ $job->id == $personale->job_id ? 'selected' : '' }}> {{ $job->id}}
                </option>

                @endforeach
            </select>
            @if ($errors->has('job'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('job') }}</strong>
            </span>
            @endif
            <span class="invalid-feedback" role="alert"></span>
        </div>


        @section( 'javascript' )
        <script type="text/javascript">
            jQuery.datetimepicker.setDateFormatter('moment');
                  $("#birthdate").datetimepicker({
                timepicker:false,
                datepicker:true,
                format: "Y-M-d"
                // format: "YYYY-MM-DD H:mm a"
                // autoclose: true,
                // todayBtn: true,
                // startDate: "2013-02-14 10:00",
                // minuteStep: 10
                // Step: 30,
            });
            $('#toggle1').on('click', function(){
                $("#birthdate").datetimepicker('toggle');
            })
    $("#hd").datetimepicker({
                timepicker:false,
                datepicker:true,
                format: "Y-M-d"
                // format: "YYYY-MM-DD H:mm a"

            });
            $('#toggle').on('click', function(){
                $("#hd").datetimepicker('toggle');
            })
        </script>


        @endsection
