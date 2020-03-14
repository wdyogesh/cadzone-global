@extends('Admin.layouts.app')
@section('app_title', 'About Company')
@section('content')

    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">About The Company</h6>
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
                <div class="col-sm-2">
                    <div>
                        <img class="profile" width="100%" src="{{ url('company_logo/'.$company->company_logo) }}" alt="{{ $company->name }}">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 intro-first intro-sec">
                    <h6 class="m-0 font-weight-bold text-primary"> Company Details </h6>
                    <table class="table_working_hours">
                        <tbody>
                        <tr class="opened_1">
                            <td class="day_label">Company Name: </td>
                            <td class="day_value"> {{ ucfirst($company->name) }}</td>
                        </tr>
                        <tr class="opened_1">
                            <td class="day_label">Contact Person: </td>
                            <td class="day_value"> {{ $company->contact_person }} </td>
                        </tr>
                        <tr class="opened_1">
                            <td class="day_label">Office Contact: </td>
                            <td class="day_value">{{ $company->office_contact }}</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">Hr Contact:</td>
                            <td class="day_value"> {{ $company->hr_contact }} </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-5 col-md-5">
                    <h6 class="m-0 font-weight-bold text-primary">Company Address : </h6>
                    <div>
                        <p>
                            {{ $company->address }}, Country : {{ $company->country->name }} , State: {{ $company->state->name }} , City : {{ $company->city->name }}
                        </p>
                    </div>

                    <h6 class="m-0 font-weight-bold text-primary">Other Details : </h6>
                    <div>
                        <p>
                            {{ $company->other_details }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
