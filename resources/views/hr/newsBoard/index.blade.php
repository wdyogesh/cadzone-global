@extends('hr.layouts.app')
@section('app_title', 'News Board')
@section('content')
    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-9">
                    <h6 class="m-0 font-weight-bold text-primary">News Board</h6>
                    @if(session('message'))
                        <span style="color: green;">{{ session('message') }}</span>
                    @endif
                </div>
                <div class="col-md-3 pull-right">
                    <a href="{{ route('newsBoard.create') }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add Board News</span>
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
                        <th>News</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>News</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($newsboards as $newsboard)
                    <tr>
                        <td>{{ $newsboard->id }}</td>
                        <td>{!! $newsboard->news !!}</td>
                        <td>{{ $newsboard->created_at->diffForHumans() .', '. date_format($newsboard->created_at,"d/m/Y") }}</td>
                        <td>
                              <a title="Edit" href="{{ route('newsBoard.edit', $newsboard) }}"><i class="fas fa-edit"></i></a>
                            | <a title="View" href="{{ route('newsBoard.show', $newsboard) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            | <a onclick="return confirm('Are you sure want to delete ?')" title="Delete" href="{{ route('newsBoard.delete', $newsboard) }}">
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
