@extends('admin.layouts.app')
@section('app_title', 'Applicants')
@section('content')
    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Applicants list</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Dist</th>
                        <th>Block</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Submitted</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Dist</th>
                        <th>Block</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Submitted</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($applications as $application)
                    <tr>
                        <td><a href="{{ url('/admin/applicants/'.$application->id.'/details') }}">{{ $application->application_id }}</a></td>
                        <td>{{ $application->user->name }}</td>
                        <td>{{ $application->dist_name }}</td>
                        <td>{{ $application->block_name}}</td>
                        <td>{{ $application->user->email }}</td>
                        <td>{{ $application->user->present_phone. ', ' . $application->user->perma_number  }}</td>
                        <td>{{ $application->created_at->diffForHumans() .', '. date_format($application->created_at,"Y/m/d H:i:s a") }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
