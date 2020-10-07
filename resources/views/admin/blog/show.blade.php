@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="x_panel">

        <div class="x_title">
            <h2>Create Post</h2>
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
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ $single_post->title }}</h2>  
                    <div class="clearfix"></div>
                </div>
              <div class="x_content">
                  <div><img src="{{asset('admin/post/thumb/'.$single_post->image.'')}}" alt=""></div>
                 <p>{!! $single_post->body !!}</p>
                 <hr>
                 <small>Written on {{$single_post->created_at}}</small>
                 <button class="btn btn-danger pull-right" onclick="window.close()">Close</button>
                 {{-- <button class="btn btn-primary pull-right">{{$single_post->c_name}}</button> --}}
              </div>
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