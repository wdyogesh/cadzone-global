@extends('admin.layouts.app')
@section('app_title', 'Contacts')
@section('content')
    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">News List</h6>
                    @if(session('message'))
                        <span style="color: green;">{{ session('message') }}</span>
                    @endif
                </div>
                <div class="col-md-2 pull-right">
                    <a href="{{ route('news.create') }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add Service</span>
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
                        <th>Title</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($news as $nws)
                    <tr>
                        <td>{{ $nws->id }}</td>
                        <td>{{ $nws->title }}</td>
                        <td>{{ $nws->created_at->diffForHumans() .', '. date_format($nws->created_at,"d/m/Y") }}</td>
                        <td>
                              <a title="Edit" href="{{ route('news.edit', $nws) }}"><i class="fas fa-edit"></i></a>
                            | <a title="View" href="{{ route('news.show', $nws) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            | <a onclick="return confirm('Are you sure want to delete ?')" title="Delete" href="{{ route('news.delete', $nws) }}">
                                <i style="color: red" class="fa fa-trash" aria-hidden="true"></i>
                              </a>
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
