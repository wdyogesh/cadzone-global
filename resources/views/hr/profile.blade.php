@extends('hr.layouts.app')
@section('app_title', 'Dashboard')
@section('content')
    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <form action="{{ route('employee.store') }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="required" for="Name">Name :</label>
                        <input type="text" autocomplete="off"
                        autofocus="none" value="{{ old('name') }}" name="name" id="name"
                        class="form-control-sm form-control @error('name') is-danger @enderror" placeholder="Enter Employee Name">
                        @error('name')
                            <div class="help-desk text-danger">{{ $errors->first('name') }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="required">Email id :</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}"
                        class="form-control-sm form-control @error('email') is-danger @enderror" placeholder="Enter Email id">
                        @error('email')
                            <div class="help-desk text-danger"> {{ $errors->first('email') }} </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="" class="required">Password:</label>
                        <input type="text" name="password" id="password" value="{{ old('password') }}"
                        class="form-control-sm form-control @error('password') is-danger @enderror" placeholder="Enter password">
                        @error('password')
                            <div class="help-desk text-danger"> {{ $errors->first('password') }} </div>
                        @enderror
                    </div>
                </div>
                {{-- family Details --}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="" class="required">Mother Name :</label>
                        <input type="text" name="mother_name" id="mother_name" value="{{ old('mother_name') }}"
                        class="form-control-sm form-control @error('mother_name') is-danger @enderror" placeholder="Mother Name">
                        @error('mother_name')
                            <div class="help-desk text-danger"> {{ $errors->first('mother_name') }} </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="" class="required">Father Name :</label>
                        <input type="text" value="{{ old('father_name') }}" name="father_name"
                        id="father_name" class="form-control-sm form-control @error('father_name') is-danger @enderror" placeholder="Enter Father Name">
                        @error('father_name')
                            <div class="help-desk text-danger">{{ $errors->first('father_name') }} </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="required">Blood Group :</label>
                        <select class="form-control-sm form-control" name="blood_group" id="blood_group">
                        <option value="" disabled>Select</option>
                         @foreach ($blood_groups as $blood_group)
                            <option value="{{ $blood_group }}"> {{ $blood_group }} </option>
                         @endforeach
                        </select>
                        @error('blood_group')
                        <div class="help-desk text-danger"> {{ $errors->first('blood_group') }} </div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="" class="required">Contact :</label>
                        <input type="text" name="present_phone" id="present_phone" value="{{ old('present_phone') }}"
                        class="form-control-sm form-control @error('present_phone') is-danger @enderror" placeholder="Contact Person">
                        @error('present_phone')
                            <div class="help-desk text-danger"> {{ $errors->first('present_phone') }} </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="" class="required">Alternative Contact :</label>
                        <input type="text" value="{{ old('perma_number') }}" name="perma_number"
                        id="perma_number" class="form-control-sm form-control @error('perma_number') is-danger @enderror" placeholder="Enter Office Contact Number">
                        @error('perma_number')
                            <div class="help-desk text-danger">{{ $errors->first('perma_number') }} </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="" class="required">Emergency Contact :</label>
                        <input type="text" value="{{ old('emer_contact') }}" name="emer_contact" id="emer_contact"
                        class="form-control-sm form-control @error('emer_contact') is-danger @enderror"
                        placeholder="Enter Hr Contact Number">
                        @error('emer_contact')
                            <div class="help-desk text-danger"> {{ $errors->first('emer_contact') }} </div>
                        @enderror
                    </div>
                </div>
                {{-- id details --}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="" class="required">Department :</label>
                        <input type="text" name="department" id="department" value="{{ old('department') }}"
                        class="form-control-sm form-control @error('department') is-danger @enderror" placeholder="Department ">
                        @error('department')
                            <div class="help-desk text-danger"> {{ $errors->first('department') }} </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="" class="required">Designation :</label>
                        <input type="text" value="{{ old('designation') }}" name="designation"
                        id="designation" class="form-control-sm form-control @error('designation') is-danger @enderror" placeholder="Enter Designation">
                        @error('designation')
                            <div class="help-desk text-danger">{{ $errors->first('designation') }} </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-2">
                        <label for="" class="required">Side On/Off:</label>
                        <select class="form-control-sm form-control" name="off_on_side" id="off_on_side">
                        <option value="" disabled>Select</option>
                         @foreach ($off_sides as $off_side)
                            <option value="{{ $off_side }}"> {{ $off_side }} </option>
                         @endforeach
                        </select>
                        @error('off_on_side')
                        <div class="help-desk text-danger"> {{ $errors->first('off_on_side') }} </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <label for="" class="required">DOB :</label>
                        <input type="date" value="{{ old('date_of_birth') }}" name="date_of_birth"
                        id="date_of_birth" class="form-control-sm form-control @error('date_of_birth') is-danger @enderror" placeholder="Date Of Birth">
                        @error('date_of_birth')
                            <div class="help-desk text-danger">{{ $errors->first('date_of_birth') }} </div>
                        @enderror
                    </div>

                </div>

                 <hr>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="required">Present Address :</label>
                        <textarea class="form-control-sm form-control
                        @error('curr_adddress') is-danger @enderror"
                        placeholder="Please Enter Present Address"
                        name="curr_adddress" id="curr_adddress" rows="3">{{ old('curr_adddress') }}</textarea>
                        @error('curr_adddress')
                        <div class="help-desk text-danger"> {{ $errors->first('curr_adddress') }} </div>
                        @enderror
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                    <label for="" class="required">Country</label>
                    <select id="country" class="form-control-sm form-control" name="curr_country_id" id="country">
                        @foreach ($countries as $key => $country)
                          <option value="{{ $key }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    @error('curr_country_id')
                        <div class="help-desk text-danger"> {{ $errors->first('curr_country_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="required">State</label>
                    <select class="form-control-sm form-control" name="curr_state_id" id="state"></select>
                    @error('curr_state_id')
                        <div class="help-desk text-danger"> {{ $errors->first('curr_state_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="required">city</label>
                    <select class="form-control-sm form-control" name="curr_city_id" id="city"></select>
                    @error('curr_city_id')
                        <div class="help-desk text-danger"> {{ $errors->first('curr_city_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="">Pin Code</label>
                    <input type="text" value="{{ old('curr_pin_code') }}" name="curr_pin_code" id="curr_pin_code"
                    class="form-control-sm form-control @error('curr_pin_code') is-danger @enderror"
                    placeholder="Enter pin" max="6" maxlength="6">
                    @error('curr_pin_code')
                        <div class="help-desk text-danger"> {{ $errors->first('curr_pin_code') }} </div>
                    @enderror
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="required">Permanent Address :</label>
                        <textarea class="form-control-sm form-control
                        @error('perma_address') is-danger @enderror"
                        placeholder="Please Enter Permanent Address"
                        name="perma_address" id="perma_address" rows="3">{{ old('perma_address') }}</textarea>
                        @error('perma_address')
                        <div class="help-desk text-danger"> {{ $errors->first('perma_address') }} </div>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                    <label for="" class="required">Country</label>
                    <select class="form-control-sm form-control" name="perma_country_id" id="country_one">
                        @foreach ($countries as $key => $country)
                          <option value="{{ $key }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    @error('perma_country_id')
                        <div class="help-desk text-danger"> {{ $errors->first('perma_country_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="required">State</label>
                    <select class="form-control-sm form-control" name="perma_state_id" id="state_one"></select>
                    @error('perma_state_id')
                        <div class="help-desk text-danger"> {{ $errors->first('perma_state_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="required">city</label>
                    <select class="form-control-sm form-control" name="perma_city_id" id="city_one"></select>
                    @error('perma_city_id')
                        <div class="help-desk text-danger"> {{ $errors->first('perma_city_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="">Pin Code</label>
                    <input type="text" value="{{ old('perma_pin_code') }}" name="perma_pin_code" id="perma_pin_code"
                    class="form-control-sm form-control @error('perma_pin_code') is-danger @enderror"
                    placeholder="Enter pin code" max="6" maxlength="6">
                    @error('perma_pin_code')
                        <div class="help-desk text-danger"> {{ $errors->first('perma_pin_code') }} </div>
                    @enderror
                </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">Bank Details</div>
                    <div class="col-md-3">
                        <label for="">Account Number</label>
                        <input type="text" value="{{ old('bank_number') }}" name="bank_number" id="bank_number"
                        class="form-control-sm form-control @error('bank_number') is-danger @enderror"
                        placeholder="Enter Account Number">
                        @error('bank_number')
                            <div class="help-desk text-danger"> {{ $errors->first('bank_number') }} </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="" class="required">IFSC Code: </label>
                        <input type="text" value="{{ old('ifsc_code') }}" name="ifsc_code" id="ifsc_code"
                        class="form-control-sm form-control @error('ifsc_code') is-danger @enderror"
                        placeholder="Enter Ifsc code">
                        @error('ifsc_code')
                            <div class="help-desk text-danger"> {{ $errors->first('ifsc_code') }} </div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="" class="required">Pan No.: </label>
                        <input type="text" value="{{ old('pan_no') }}" name="pan_no" id="pan_no"
                        class="form-control-sm form-control @error('pan_no') is-danger @enderror"
                        placeholder="Enter Pan Number">
                        @error('pan_no')
                            <div class="help-desk text-danger"> {{ $errors->first('pan_no') }} </div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="" class="required">Uan No.: </label>
                        <input type="text" value="{{ old('uan_no') }}" name="uan_no" id="uan_no"
                        class="form-control-sm form-control @error('uan_no') is-danger @enderror"
                        placeholder="Enter UAN Number">
                        @error('uan_no')
                            <div class="help-desk text-danger"> {{ $errors->first('uan_no') }} </div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="" class="required">ESIC NO.: </label>
                        <input type="text" value="{{ old('esic_no') }}" name="esic_no" id="esic_no"
                        class="form-control-sm form-control @error('esic_no') is-danger @enderror"
                        placeholder="Enter ESCi NUmber">
                        @error('esic_no')
                            <div class="help-desk text-danger"> {{ $errors->first('esic_no') }} </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="" class="required">Upload Photo: </label>
                        <input type="file" class="form-control-sm form-control-file"
                        name="image" id="image" placeholder="Upload Photo"
                        {{ old('image') }}
                        aria-describedby="fileHelpId">
                        @error('image')
                         <div class="help-desk text-danger"> {{ $errors->first('image') }} </div>
                        @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- TODO: This is for server side, there is another version for browser defaults -->
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('search-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#country').change(function(){
    var country = $(this).val();
    if(country){
        $.ajax({
           type:"GET",
           url:"{{url('api/get-state-list')}}/"+country,
           success:function(res){
            if(res){
                $("#state").empty();
                $("#city").empty();
                $("#state").append('<option>Select</option>');
                $("#city").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }
   });
    $('#state').on('change',function(){
    var state = $(this).val();
    if(state){
        $.ajax({
           type:"GET",
           url:"{{url('api/get-city-list')}}/"+state,
           success:function(res){
            if(res){
                $("#city").empty();
                $("#city").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }
   });
</script>
<!-- state city select end -->
<script>
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
<script>
var countryurl = "{{url('api/country-and-codes')}}";
$(document).ready(function(){
    $('#country').on('change', function(){
        var country_name = $(this).val();
        if (country_name == '') {
        $('#country_code').val('');
        $('#country_code_second').val('');
        }else{
        $.ajax({
        type: "GET",
        url: countryurl + '/' + country_name,
        success: function (data) {
        $('#country_code').val('+' + ' ' + data.phonecode);
        $('#country_code_second').val('+' + ' ' + data.phonecode);
        },
        error: function (data) {
            console.log('Error:', data);
        }
        });
        }
    });
});


 $('#country_one').change(function(){
    var country = $(this).val();
    if(country){
        $.ajax({
           type:"GET",
           url:"{{url('api/get-state-list')}}/"+country,
           success:function(res){
            if(res){
                $("#state_one").empty();
                $("#city_one").empty();
                $("#state_one").append('<option>Select</option>');
                $("#city_one").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state_one").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#state_one").empty();
            }
           }
        });
    }else{
        $("#state_one").empty();
        $("#city_one").empty();
    }
   });
    $('#state_one').on('change',function(){
    var state = $(this).val();
    if(state){
        $.ajax({
           type:"GET",
           url:"{{url('api/get-city-list')}}/"+state,
           success:function(res){
            if(res){
                $("#city_one").empty();
                $("#city_one").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#city_one").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#city_one").empty();
            }
           }
        });
    }else{
        $("#city_one").empty();
    }
   });
</script>
<!-- state city select end -->
<script>
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
<script>
var countryurl = "{{url('api/country-and-codes')}}";
$(document).ready(function(){
    $('#country_one').on('change', function(){
        var country_name = $(this).val();
        if (country_name == '') {
        $('#country_one').val('');
        $('#country_code_second').val('');
        }else{
        $.ajax({
        type: "GET",
        url: countryurl + '/' + country_name,
        success: function (data) {
        $('#country_code').val('+' + ' ' + data.phonecode);
        $('#country_code_second').val('+' + ' ' + data.phonecode);
        },
        error: function (data) {
            console.log('Error:', data);
        }
        });
        }
    });
});
</script>
@endsection

