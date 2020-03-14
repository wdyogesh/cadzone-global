@extends('admin.layouts.app')
@section('app_title', 'Applicant Details')
@section('content')
    <!-- Begin Page Content -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Applicants Id: {{ $details->application_id }} </h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <div>
                        <img class="profile" width="100%" src="{{ url('public/images/'.$details->image) }}" alt="{{ $details->name }}">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 intro-first intro-sec">
                    <h6 class="m-0 font-weight-bold text-primary"> Personal Details </h6>
                    <table class="table_working_hours">
                        <tbody>
                        <tr class="opened_1">
                            <td class="day_label">Apply For: </td>
                            <td class="day_value"> {{ $details->apply_for }}</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">Name:</td>
                            <td class="day_value"> {{ $details->name }} </td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">Name:</td>
                            <td class="day_value"> {{ $details->email }} </td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">DOB:</td>
                            <td class="day_value"> {{ $details->dob }} </td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">AGE:</td>
                            <td class="day_value"> {{ $details->age }} </td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">Email:</td>
                            <td class="day_value"> {{ $details->email }} </td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">Contact Number :</td>
                            <td class="day_value"> {{ $details->present_phone.', '. $details->perma_number }} </td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">Father/Husband Name :</td>
                            <td class="day_value"> {{ $details->father_husband_name }} </td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">Mother Name: </td>
                            <td class="day_value"> {{ $details->mother_name }}</td>
                        </tr>
                        <tr class="closed">
                            <td class="day_label">Marital Status :</td>
                            <td class="day_value closed"><span> {{ $details->marital_status }} </span></td>
                        </tr>
                        <tr class="closed">
                            <td class="day_label">Education : </td>
                            <td class="day_value closed"><span> {{ $details->education }} </span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-5 col-md-5">
                    <h6 class="m-0 font-weight-bold text-primary"> Address Details </h6>
                    <div>
                        <p class="day_label"> Present Address: </p>
                        <p>
                            {{ $details->present_address }}, Post : {{ $details->present_post }} , Dist: {{ $details->present_dist }} , PS : {{ $details->present_ps }}
                            Pin: {{ $details->present_pin }}, Phone : {{ $details->present_phone }}
                        </p>
                    </div>
                    <div>
                        <p class="day_label"> Permanent Address: </p>
                        <p>
                            {{ $details->perma_address }}, Post : {{ $details->perma_post }} , Dist: {{ $details->perma_dist }} , PS : {{ $details->perma_ps }}
                            Pin: {{ $details->perma_pin }}, Phone : {{ $details->perma_phone }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
