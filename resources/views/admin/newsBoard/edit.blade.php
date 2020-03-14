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
                    <h6 class="m-0 font-weight-bold text-primary">Update News Board</h6>
                </div>
                <div class="col-md-2 pull-right">
                    <a href="{{ route('news.index') }}" class="btn btn-primary btn-icon-split btn-sm">
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
                <form action="{{ route('newsBoard.update', $newsboards) }}" method="post" class="form" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="required">Board News:</label>
                        <textarea class="form-control-sm form-control" id="editor1" name="news"
                        placeholder="Please Enter news"
                        name="news" id="news" rows="3">{{ $newsboards->news }}</textarea>
                        @error('news')
                        <div class="help-desk text-danger"> {{ $errors->first('news') }} </div>
                        @enderror
                    </div>
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
