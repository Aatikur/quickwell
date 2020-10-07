@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="x_panel">
    <div class="x_title">
      <h2>Post Job Openings</h2>
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
          <form class="form-horizontal" method="POST" action="{{ route('admin.store_carrier') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                <label for="designation" class="col-md-2 control-label">Designation</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="designation" required>
                    @if($errors->has('designation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('designation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('educational_qualification') ? ' has-error' : '' }}">
                <label for="educational_qualification" class="col-md-2 control-label">Educational Qualification</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="educational_qualification" required>
                    @if ($errors->has('educational_qualification'))
                        <span class="help-block">
                            <strong>{{ $errors->first('educational_qualification') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('work_experience') ? ' has-error' : '' }}">
                <label for="work_experience" class="col-md-2 control-label">Work Experience</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="work_experience" required>
                    @if ($errors->has('work_experience'))
                        <span class="help-block">
                            <strong>{{ $errors->first('work_experience') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                <label for="role" class="col-md-2 control-label">Roles and Responsibilty</label>
                <div class="col-md-10">
                    <textarea id="role" class="form-control" name="role" required>{{ old('role') }}</textarea>
                    @if ($errors->has('role'))
                        <span class="help-block">
                            <strong>{{ $errors->first('role') }}</strong>
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
     CKEDITOR.replace( 'role', {
         height: 400,
         filebrowserUploadUrl: "{{route('admin.ck_editor_image_upload', ['_token' => csrf_token() ])}}",
         filebrowserUploadMethod: 'form'
     } );

     $(document).ready(function(){
        
     });
 </script>
@endsection