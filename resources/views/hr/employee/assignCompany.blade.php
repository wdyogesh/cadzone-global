@extends('hr.layouts.app')
@section('app_title', 'Create Company')
@section('content')
    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Uplaod Employee Documents</h6>
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
                <form action="{{ route('employee.doUpload', $employee) }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="employee_id" value="{{ $employee }}">
                @isset($uploadDocuments->id)
                    <input type="hidden" name="uplaod_doc_id" value="{{ $uploadDocuments->id ?: '' }}">
                @endisset
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="" class="required">Upload Aadhar Card: </label>
                        <input type="file" class="form-control-sm form-control-file"
                        name="aadhar_card" id="aadhar_card" placeholder="Upload Photo"
                        {{ old('aadhar_card') }}
                        aria-describedby="fileHelpId">
                        @error('aadhar_card')
                         <div class="help-desk text-danger"> {{ $errors->first('aadhar_card') }} </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        @isset($uploadDocuments->aadhar_card)
                            <img class="profile" width="60%" src="{{ url('user_documents/'.$uploadDocuments->aadhar_card) }}" alt="Addhar Card">
                        @endisset
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="" class="required">Upload Pan Card: </label>
                        <input type="file" class="form-control-sm form-control-file"
                        name="pan_card" id="pan_card" placeholder="Upload Pan Card"
                        {{ old('pan_card') }}
                        aria-describedby="fileHelpId">
                        @error('pan_card')
                         <div class="help-desk text-danger"> {{ $errors->first('pan_card') }} </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        @isset($uploadDocuments->pan_card)
                            <img class="profile" width="60%" src="{{ url('user_documents/'.$uploadDocuments->pan_card) }}" alt="Pan Card">
                        @endisset
                    </div>
                </div>
                <hr>
                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                        <label for="" class="required">Upload Bank Passbook: </label>
                        <input type="file" class="form-control-sm form-control-file"
                        name="bank_passbook" id="bank_passbook" placeholder="Upload Bank Passbook"
                        {{ old('bank_passbook') }}
                        aria-describedby="fileHelpId">
                        @error('bank_passbook')
                         <div class="help-desk text-danger"> {{ $errors->first('bank_passbook') }} </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        @isset($uploadDocuments->bank_passbook)
                            <img class="profile" width="60%" src="{{ url('user_documents/'.$uploadDocuments->bank_passbook) }}" alt="Bank Passbook">
                        @endisset
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
