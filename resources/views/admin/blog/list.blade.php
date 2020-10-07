@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="x_panel">

        <div class="x_title">
            <h2>Post List</h2>
            <div class="clearfix"></div>
        </div>
        @if (Session::has('message'))
        <div class="alert alert-success" >{{ Session::get('message') }}</div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <div class="x_content">
            <table id="post_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>Sl. No</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>                       
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
 
@section('script')
<script>
    $(function(){
        var table = $('#post_list').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.ajax.show_post') }}",
            columns: [
                {data: 'id', name: 'id',searchable: true},
                {data: 'title', name: 'title',searchable: true},      
                {data: 'created_at', name: 'created_at',searchable: true},      
                {data: 'action', name: 'action',searchable: true},      
            ]
        });
    })
</script>
@endsection