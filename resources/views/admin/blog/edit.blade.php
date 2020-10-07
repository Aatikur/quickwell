@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="x_panel">

        <div class="x_title">
            <h2>Edit Post</h2>
            <div class="clearfix"></div>
        </div>
        <div>
             @if (Session::has('message'))
                <div class="alert alert-success" >{{ Session::get('message') }}</div>
             @endif
             @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
             @endif
        </div>
        <div>
            <div class="x_content">
                {{ Form::open(['method' => 'post','route'=>'admin.update_post', 'enctype'=>'multipart/form-data']) }}
                    <input type="hidden" name="id" value="{{ $post->id }}">
                    <div class="well" style="overflow: auto">
                        <div class="form-row mb-10">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $post->title }}">
                                @if($errors->has('title'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                <label for="image">Image Upload</label>
                                <input type="file" class="form-control" name="image" accept="/*">
                                @if($errors->has('image'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @enderror
                                <div>
                                    <img src="{{ asset('admin/post/thumb/'.$post->image) }}" alt="image" height="200px" width="450px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="well" style="overflow: auto">
                        <div class="form-row mb-10">
                            <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                <label for="category">Body*</label>
                                <textarea class="form-control" name="body" placeholder="Enter full description" id="body">{{ $post->body }}</textarea>
                                @if($errors->has('body'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                                @enderror
                            </div>                                 
                        </div>
                    </div>
                    <div class="form-group">    	            	
                        {{ Form::submit('Update', array('class'=>'btn btn-success pull-right')) }}  
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
 @endsection
 @section('script')
 <script src="{{ asset('admin/ckeditor4/ckeditor.js')}}"></script>
 <script>
     CKEDITOR.replace( 'body', {
         height: 400,
         filebrowserUploadUrl: "{{route('admin.ck_editor_image_upload', ['_token' => csrf_token() ])}}",
         filebrowserUploadMethod: 'form'
     } );

     $(document).ready(function(){

     });
 </script>
@endsection