@extends('admin.layouts.app')
@section('app_title', 'Create Service')
@section('add_css')
<link rel="stylesheet" href="{{ asset('/home/css/bootstrap3-wysihtml5.min.css') }}">
@endsection
@section('content')
    <!-- Begin Page Content -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">View Service Details</h6>
                </div>
                <div class="col-md-2 pull-right">
                    <a href="{{ route('services.index') }}" class="btn btn-primary btn-icon-split btn-sm">
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
                <form action="{{ route('services.update', $service) }}" method="post" class="form" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                <div class="row">
                    <div class="form-group col-md-6">
                    <label class="required" for="">Title :</label>
                    <input type="text" autocomplete="off"
                    autofocus="none" value="{{ $service->title }}" title="title" id="title"
                    name="title"
                    class="form-control-sm form-control @error('title') is-danger @enderror" placeholder="Enter Service title">
                    @error('title')
                        <div class="help-desk text-danger">{{ $errors->first('title') }}</div>
                    @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="required">Description :</label>
                        <textarea class="form-control-sm form-control" id="editor1" name="description"
                        placeholder="Please Enter service description"
                        name="description" id="description" rows="3">{{ $service->description }}</textarea>
                        @error('description')
                        <div class="help-desk text-danger"> {{ $errors->first('description') }} </div>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img class="profile" width="60%" src="{{ url('public/service_images/'.$service->image_1) }}" alt="{{ $service->image_1 }}">
                    </div>
                    <div class="col-md-4">
                        <img class="profile" width="60%" src="{{ url('public/service_images/'.$service->image_2) }}" alt="{{ $service->image_2 }}">
                    </div>
                    <div class="col-md-4">
                        <img class="profile" width="60%" src="{{ url('public/service_images/'.$service->image_3) }}" alt="{{ $service->image_3 }}">
                    </div>
                </div>
                <!-- TODO: This is for server side, there is another version for browser defaults -->
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('search-script')
<script src="https://cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
<script src="{{'/home/js/bootstrap3-wysihtml5.all.min.js'}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
@endsection
