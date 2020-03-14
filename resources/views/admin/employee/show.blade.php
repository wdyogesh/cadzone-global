@extends('admin.layouts.app')
@section('app_title', 'Create Company')
@section('content')
    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Employee Details , Employee Code :
                        <span class="badge badge-success"> {{ $employee->employee_code }} </span>
                    </h6>
                </div>
                <div class="col-md-2 pull-right">
                    <a href="{{ route('employee.list') }}" class="btn btn-primary btn-icon-split btn-sm">
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
                <form action="{{ route('employee.update', $employee) }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="Name">Name :</label>
                        <input type="text" autocomplete="off"
                        autofocus="none" value="{{ $employee->user['name'] }}"  readonly name="name" id="name"
                        class="form-control-sm form-control @error('name') is-danger @enderror" placeholder="Enter Employee Name">
                        @error('name')
                            <div class="help-desk text-danger">{{ $errors->first('name') }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Email id :</label>
                        <input type="text"  readonly name="email" id="email" value="{{ $employee->user['email'] }}" readonly
                        class="form-control-sm form-control @error('email') is-danger @enderror" placeholder="Enter Email id">
                        @error('email')
                            <div class="help-desk text-danger"> {{ $errors->first('email') }} </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Password:</label>
                        <input type="text"  readonly name="password" id="password" value="{{ old('password') }}"
                        class="form-control-sm form-control @error('password') is-danger @enderror" placeholder="Enter password">
                        @error('password')
                            <div class="help-desk text-danger"> {{ $errors->first('password') }} </div>
                        @enderror
                    </div>
                </div>
                {{-- family Details --}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="">Mother Name :</label>
                        <input type="text"  readonly name="mother_name" id="mother_name" value="{{ $employee->mother_name }}"
                        class="form-control-sm form-control @error('mother_name') is-danger @enderror" placeholder="Mother Name">
                        @error('mother_name')
                            <div class="help-desk text-danger"> {{ $errors->first('mother_name') }} </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Father Name :</label>
                        <input type="text" value="{{ $employee->father_name }}"  readonly name="father_name"
                        id="father_name" class="form-control-sm form-control @error('father_name') is-danger @enderror" placeholder="Enter Father Name">
                        @error('father_name')
                            <div class="help-desk text-danger">{{ $errors->first('father_name') }} </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Blood Group :</label>
                        <select class="form-control-sm form-control"  readonly name="blood_group" id="blood_group">
                        <option value="" disabled>Select</option>
                         @foreach ($blood_groups as $blood_group)
                            <option value="{{ $blood_group }}" {{ $employee->blood_group == $blood_group ? 'Selected' : '' }}> {{ $blood_group }} </option>
                         @endforeach
                        </select>
                        @error('blood_group')
                        <div class="help-desk text-danger"> {{ $errors->first('blood_group') }} </div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="">Contact :</label>
                        <input type="text"  readonly name="present_phone" id="present_phone" value="{{ $employee->user['present_phone'] }}"
                        class="form-control-sm form-control @error('present_phone') is-danger @enderror" placeholder="Contact Person">
                        @error('present_phone')
                            <div class="help-desk text-danger"> {{ $errors->first('present_phone') }} </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Alternative Contact :</label>
                        <input type="text" value="{{ $employee->user['perma_number'] }}"  readonly name="perma_number"
                        id="perma_number" class="form-control-sm form-control @error('perma_number') is-danger @enderror" placeholder="Enter Office Contact Number">
                        @error('perma_number')
                            <div class="help-desk text-danger">{{ $errors->first('perma_number') }} </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Emergency Contact :</label>
                        <input type="text" value="{{ $employee->emer_contact }}"  readonly name="emer_contact" id="emer_contact"
                        class="form-control-sm form-control @error('emer_contact') is-danger @enderror"
                        placeholder="Enter Emergency Number">
                        @error('emer_contact')
                            <div class="help-desk text-danger"> {{ $errors->first('emer_contact') }} </div>
                        @enderror
                    </div>
                </div>
                {{-- id details --}}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="">Department :</label>
                        <input type="text"  readonly name="department" id="department" value="{{ $employee->department }}"
                        class="form-control-sm form-control @error('department') is-danger @enderror" placeholder="Department ">
                        @error('department')
                            <div class="help-desk text-danger"> {{ $errors->first('department') }} </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-2">
                        <label for="">Designation :</label>
                        <input type="text" value="{{ $employee->designation }}"  readonly name="designation"
                        id="designation" class="form-control-sm form-control @error('designation') is-danger @enderror" placeholder="Enter Designation">
                        @error('designation')
                            <div class="help-desk text-danger">{{ $errors->first('designation') }} </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-2">
                        <label for="">Role :</label>
                        <select disabled class="form-control-sm form-control" name="role" id="role">
                        <option value="" disabled>Select</option>
                         @foreach ($roles as $role => $value )
                            <option value="{{ $value }}" {{ $employee->role == $value ? 'Selected' : '' }} > {{ $role }} </option>
                         @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="">Side On/Off:</label>
                        <select class="form-control-sm form-control"  readonly name="off_on_side" id="off_on_side">
                        <option value="" disabled>Select</option>
                         @foreach ($off_sides as $off_side)
                            <option value="{{ $off_side }}" {{ $employee->off_on_side == $off_side ? 'Selected' : '' }}  > {{ $off_side }} </option>
                         @endforeach
                        </select>
                        @error('off_on_side')
                        <div class="help-desk text-danger"> {{ $errors->first('off_on_side') }} </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">DOB :</label>
                        <input type="date" value="{{ $employee->date_of_birth }}"  readonly name="date_of_birth"
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
                        <label for="">Present Address :</label>
                        <textarea class="form-control-sm form-control
                        @error('curr_adddress') is-danger @enderror"
                        placeholder="Please Enter Present Address"
                         readonly name="curr_adddress" id="curr_adddress" rows="3">{{ $employee->curr_adddress }}</textarea>
                        @error('curr_adddress')
                        <div class="help-desk text-danger"> {{ $errors->first('curr_adddress') }} </div>
                        @enderror
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                    <label for="">Country</label>
                    <select id="country" class="form-control-sm form-control"  readonly name="curr_country_id" id="country">
                        @foreach ($countries as $key => $country)
                          <option value="{{ $key }}" {{ $employee->curr_country_id == $key ? 'Selected' : '' }} >{{ $country }}</option>
                        @endforeach
                    </select>
                    @error('curr_country_id')
                        <div class="help-desk text-danger"> {{ $errors->first('curr_country_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="">State </label>
                    <select class="form-control-sm form-control"  readonly name="curr_state_id" id="state">
                        <option value="{{ $employee->curr_state_id }}"> {{ $employee->currentState['name'] }} </option>
                    </select>
                    @error('curr_state_id')
                        <div class="help-desk text-danger"> {{ $errors->first('curr_state_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="">city</label>
                    <select class="form-control-sm form-control"  readonly name="curr_city_id" id="city">
                        <option value="{{ $employee->curr_city_id }}"> {{ $employee->currentCity['name'] }} </option>
                    </select>
                    @error('curr_city_id')
                        <div class="help-desk text-danger"> {{ $errors->first('curr_city_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="">Pin Code</label>
                    <input type="text" value="{{ $employee->curr_pin_code }}"  readonly name="curr_pin_code" id="curr_pin_code"
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
                        <label for="">Permanent Address :</label>
                        <textarea class="form-control-sm form-control
                        @error('perma_address') is-danger @enderror"
                        placeholder="Please Enter Permanent Address"
                         readonly name="perma_address" id="perma_address" rows="3">{{ $employee->perma_address }}</textarea>
                        @error('perma_address')
                        <div class="help-desk text-danger"> {{ $errors->first('perma_address') }} </div>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                    <label for="">Country</label>
                    <select class="form-control-sm form-control"  readonly name="perma_country_id" id="country_one">
                        @foreach ($countries as $key => $country)
                          <option value="{{ $key }}" {{ $employee->perma_country_id == $key ? 'Selected' : '' }} >{{ $country }}</option>
                        @endforeach
                    </select>
                    @error('perma_country_id')
                        <div class="help-desk text-danger"> {{ $errors->first('perma_country_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="">State</label>
                    <select class="form-control-sm form-control"  readonly name="perma_state_id" id="state_one">
                        <option value="{{ $employee->perma_state_id }}"> {{ $employee->permaState['name'] }} </option>
                    </select>
                    @error('perma_state_id')
                        <div class="help-desk text-danger"> {{ $errors->first('perma_state_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="">city</label>
                    <select class="form-control-sm form-control"  readonly name="perma_city_id" id="city_one">
                        <option value="{{ $employee->perma_city_id }}"> {{ $employee->permazCity['name'] }} </option>
                    </select>
                    @error('perma_city_id')
                        <div class="help-desk text-danger"> {{ $errors->first('perma_city_id') }} </div>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="">Pin Code</label>
                    <input type="text" value="{{ $employee->perma_pin_code }}"  readonly name="perma_pin_code" id="perma_pin_code"
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
                        <input type="text" value="{{ $employee->bank_number }}"  readonly name="bank_number" id="bank_number"
                        class="form-control-sm form-control @error('bank_number') is-danger @enderror"
                        placeholder="Enter Account Number">
                        @error('bank_number')
                            <div class="help-desk text-danger"> {{ $errors->first('bank_number') }} </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="">IFSC Code: </label>
                        <input type="text" value="{{ $employee->ifsc_code }}"  readonly name="ifsc_code" id="ifsc_code"
                        class="form-control-sm form-control @error('ifsc_code') is-danger @enderror"
                        placeholder="Enter Ifsc code">
                        @error('ifsc_code')
                            <div class="help-desk text-danger"> {{ $errors->first('ifsc_code') }} </div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="">Pan No.: </label>
                        <input type="text" value="{{ $employee->pan_no }}"  readonly name="pan_no" id="pan_no"
                        class="form-control-sm form-control @error('pan_no') is-danger @enderror"
                        placeholder="Enter Pan Number">
                        @error('pan_no')
                            <div class="help-desk text-danger"> {{ $errors->first('pan_no') }} </div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="">Uan No.: </label>
                        <input type="text" value="{{ $employee->uan_no }}"  readonly name="uan_no" id="uan_no"
                        class="form-control-sm form-control @error('uan_no') is-danger @enderror"
                        placeholder="Enter UAN Number">
                        @error('uan_no')
                            <div class="help-desk text-danger"> {{ $errors->first('uan_no') }} </div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="">ESIC NO.: </label>
                        <input type="text" value="{{ $employee->esic_no }}"  readonly name="esic_no" id="esic_no"
                        class="form-control-sm form-control @error('esic_no') is-danger @enderror"
                        placeholder="Enter ESCi NUmber">
                        @error('esic_no')
                            <div class="help-desk text-danger"> {{ $errors->first('esic_no') }} </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-top: 20px">
                       <img class="profile" width="60%" src="{{ url('user_images/'.$employee->user['images']) }}" alt="{{ $employee->user['name'] }}" />
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">Uploaded Documents</div>
                </div>
                <!-- TODO: This is for server side, there is another version for browser defaults -->
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
