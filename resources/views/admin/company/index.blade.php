@extends('Admin.layouts.app')
@section('app_title', 'Add Company')
@section('content')

    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Company List</h6>
                    @if(session('message'))
                        <span style="color: green;">{{ session('message') }}</span>
                    @endif
                </div>
                <div class="col-md-2 pull-right">
                    <a href="{{ route('create-company') }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add Compnay</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Hr Number</th>
                        <th>State, City</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Hr Number</th>
                        <th>State, City</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->contact_person }}</td>
                        <td>{{ $company->hr_contact }}</td>
                        <td>{{ $company->state->name }}, {{ $company->city->name }} </td>
                        <td>{{ $company->created_at->diffForHumans() .', '. date_format($company->created_at,"d/m/Y") }}</td>
                        <td>
                            <a title="Edit" href="{{ route('company.edit', $company) }}"><i class="fas fa-edit"></i></a>
                            | <a title="View" href="{{ route('company.show', $company) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            | <a onclick="return confirm('Are you sure want to delete ?')" title="Delete" href="{{ route('company.delete', $company) }}"> <i style="color: red" class="fa fa-trash" aria-hidden="true"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
