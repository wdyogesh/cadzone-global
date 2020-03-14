@extends('admin.layouts.app')
@section('app_title', 'Create Company')
@section('content')

    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Company</h6>
                </div>
                <div class="col-md-2 pull-right">
                    <a href="{{ route('company-list') }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Go Back</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <form action="{{ route('create-company') }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                    <label class="required" for="">Company Name :</label>
                    <input type="text" autocomplete="off"
                    autofocus="none" value="{{ old('name') }}" name="name" id="name"
                    class="form-control-sm form-control @error('name') is-danger @enderror" placeholder="Enter Company Name">
                    @error('name')
                        <div class="help-desk text-danger">{{ $errors->first('name') }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="required">Contact Person :</label>
                    <input type="text" name="contact_person" id="contact_person" value="{{ old('contact_person') }}"
                    class="form-control-sm form-control @error('contact_person') is-danger @enderror" placeholder="Contact Person">
                    @error('contact_person')
                        <div class="help-desk text-danger"> {{ $errors->first('contact_person') }} </div>
                    @enderror
                </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="" class="required">Office Contact :</label>
                    <input type="text" value="{{ old('office_contact') }}" name="office_contact"
                    id="office_contact" class="form-control-sm form-control @error('office_contact') is-danger @enderror" placeholder="Enter Office Contact Number">
                    @error('office_contact')
                        <div class="help-desk text-danger">{{ $errors->first('office_contact') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="required">Hr Contact :</label>
                    <input type="text" value="{{ old('hr_contact') }}" name="hr_contact" id="hr_contact"
                     class="form-control-sm form-control @error('hr_contact') is-danger @enderror"
                     placeholder="Enter Hr Contact Number">
                    @error('hr_contact')
                        <div class="help-desk text-danger"> {{ $errors->first('hr_contact') }} </div>
                    @enderror
                </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="required">Address :</label>
                        <textarea class="form-control-sm form-control
                        @error('address') is-danger @enderror"
                        placeholder="Please Enter Address"
                        name="address" id="address" rows="3">{{ old('address') }}</textarea>
                        @error('address')
                        <div class="help-desk text-danger"> {{ $errors->first('address') }} </div>
                        @enderror
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                    <label for="" class="required">Country</label>
                    <select id="country" class="form-control-sm form-control @error('country') is-danger @enderror" name="country" id="country">
                        @foreach ($countries as $key => $country)
                          <option value="{{ $key }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    @error('country')
                        <div class="help-desk text-danger"> {{ $errors->first('country') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="required">State</label>
                    <select class="form-control-sm form-control" name="state" id="state"></select>
                    @error('state')
                        <div class="help-desk text-danger"> {{ $errors->first('state') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="required">city</label>
                    <select class="form-control-sm form-control" name="city" id="city"></select>
                    @error('city')
                        <div class="help-desk text-danger"> {{ $errors->first('city') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="">Status</label>
                    <select class="form-control-sm form-control" name="status" id="status">
                        <option disabled>Select</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status')
                        <div class="help-desk text-danger"> {{ $errors->first('status') }} </div>
                    @enderror
                </div>
                </div>

                <div class="form-group">
                    <label for="">Other Details</label>
                    <textarea class="form-control-sm form-control @error('other_details') is-danger @enderror"
                    name="other_details" id="other_details"
                    placeholder="Enter About the Other company Details !!"
                    rows="3">{{ old('other_details') }}</textarea>
                    @error('other_details')
                        <div class="help-desk text-danger">{{ $errors->first('other_details') }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Upload Company Logo</label>
                    <input type="file" class="form-control-sm form-control-file"
                    name="company_logo" id="company_logo" placeholder="Upload Company Logo"
                    {{ old('company_logo') }}
                    aria-describedby="fileHelpId">
                    @error('company_logo')
                        <div class="help-desk text-danger"> {{ $errors->first('company_logo') }} </div>
                    @enderror
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
</script>
@endsection
