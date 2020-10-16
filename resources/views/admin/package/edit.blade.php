@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="x_panel">
    <div class="x_title">
      <h2>Update Package</h2>
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
          <form class="form-horizontal" method="POST" action="{{ route('admin.update_package') }}">
            <input type="hidden" name="id" value="{{ $package->id }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">Package Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" value="{{ $package->name }}" name="name" placeholder="Enter Package Name" required>
                    @if($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                <label for="amount" class="col-md-2 control-label">Amount</label>
                <div class="col-md-10">
                    <input id="amount" type="number" value="{{ $package->amount }}" class="form-control" placeholder="Enter Amount" name="amount" required>
                    @if ($errors->has('amount'))
                        <span class="help-block">
                            <strong>{{ $errors->first('amount') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('feature') ? ' has-error' : '' }}">
                <label for="category" class="col-md-2 control-label">Feature</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="feature" placeholder="Enter full feature" id="feature">{{old('feature')}}
                    {{ $package->feature }}</textarea>
                    @if($errors->has('feature'))
                    <span class="invalid-feedback" role="alert" >
                        <strong style="color:red">{{ $errors->first('feature') }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="category" class="col-md-2 control-label">Descripttion</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="description" placeholder="Enter full description" id="description">{{$package->desc}}</textarea>
                    @if($errors->has('description'))
                    <span class="invalid-feedback" role="alert" >
                        <strong style="color:red">{{ $errors->first('description') }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-10 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Update
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
     CKEDITOR.replace( 'description', {
         height: 400,
         filebrowserUploadUrl: "{{route('admin.ck_editor_image_upload', ['_token' => csrf_token() ])}}",
         filebrowserUploadMethod: 'form'
     } );
     CKEDITOR.replace( 'feature', {
         height: 400,
         filebrowserUploadUrl: "{{route('admin.ck_editor_image_upload', ['_token' => csrf_token() ])}}",
         filebrowserUploadMethod: 'form'
     } );

     $(document).ready(function(){

     });
 </script>
@endsection