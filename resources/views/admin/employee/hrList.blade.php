@extends('admin.layouts.app')
@section('app_title', 'Contacts')
@section('content')
    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">HR List</h6>
                    @if(session('message'))
                        <span style="color: green;">{{ session('message') }}</span>
                    @endif
                </div>
                <div class="col-md-2 pull-right">
                    <a href="{{ route('employee.create') }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add HR </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Emp Code</th>
                        <th>Name</th>
                        <th>DEPARTMENT</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Emp Code</th>
                        <th>Name</th>
                        <th>DEPARTMENT</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->employee['employee_code'] }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->employee['department'] }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->present_phone }}</td>
                        <td>{{ $employee->created_at }}</td>
                        <td>
                              <a title="Edit" href="{{ route('employee.edit', $employee) }}"><i class="fas fa-edit"></i></a>
                            | <a title="View" href="{{ route('employee.show', $employee) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            | <a onclick="return confirm('Are you sure want to delete ?')" title="Delete" href="{{ route('employee.delete', $employee) }}">
                                <i style="color: red" class="fa fa-trash" aria-hidden="true"></i>
                              </a>
                            | <a title="Upload Images" href="{{ route('employee.uploadDoc', $employee) }}"><i class="fas fa-upload"></i></a>
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
