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
                    <h6 class="m-0 font-weight-bold text-primary">Add New Service</h6>
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
                <form action="{{ route('services.store') }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                    <label class="required" for="">Title :</label>
                    <input type="text" autocomplete="off"
                    autofocus="none" value="{{ old('title')}}" title="title" id="title"
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
                        name="description" id="description" rows="3">{{ old('description') }}</textarea>
                        @error('description')
                        <div class="help-desk text-danger"> {{ $errors->first('description') }} </div>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Upload Image One (First Image)</label>
                    <input type="file" class="form-control-sm form-control-file"
                    name="image_1" id="image_1" placeholder="Upload Company Logo"
                    {{ old('image_1') }}
                    aria-describedby="fileHelpId">
                    @error('image_1')
                        <div class="help-desk text-danger"> {{ $errors->first('image_1') }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Upload Image Two</label>
                    <input type="file" class="form-control-sm form-control-file"
                    name="image_2" id="image_2" placeholder="Upload Company Logo"
                    {{ old('image_2') }}
                    aria-describedby="fileHelpId">
                    @error('image_2')
                        <div class="help-desk text-danger"> {{ $errors->first('image_2') }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Upload Image Three</label>
                    <input type="file" class="form-control-sm form-control-file"
                    name="image_3" id="image_3" placeholder="Upload Company Logo"
                    {{ old('image_3') }}
                    aria-describedby="fileHelpId">
                    @error('image_3')
                        <div class="help-desk text-danger"> {{ $errors->first('image_3') }} </div>
                    @enderror
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
