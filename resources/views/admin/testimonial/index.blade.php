@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="x_panel">
    <div class="x_title">
      <h2>Testimonials</h2>
      <div class="clearfix"></div>
    </div>
    @if (Session::has('message'))
    <div class="alert alert-success" >{{ Session::get('message') }}</div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <div class="x_content">
        <div class="well">
          <form class="form-horizontal" method="POST" action="{{ route('admin.store_testimonial') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label for="image" class="col-md-2 control-label">Image Upload</label>
                <div class="col-md-10">
                    <input type="file" class="form-control" name="image" accept="/*" required>
                    @if ($errors->has('image'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                <label for="desc" class="col-md-2 control-label">Descripttion</label>
                <div class="col-md-10">
                    <textarea id="desc" class="form-control" name="desc" required>{{ old('desc') }}</textarea>
                    @if ($errors->has('desc'))
                        <span class="help-block">
                            <strong>{{ $errors->first('desc') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>

        </form>
        </div>
    </div>
  </div>
</div>
 @endsection

 @section('script')
 <script src="{{ asset('admin/ckeditor4/ckeditor.js')}}"></script>
 <script>
     CKEDITOR.replace( 'desc', {
         height: 400,
         filebrowserUploadUrl: "{{route('admin.ck_editor_image_upload', ['_token' => csrf_token() ])}}",
         filebrowserUploadMethod: 'form'
     } );

     $(document).ready(function(){
        
     });
 </script>
@endsection