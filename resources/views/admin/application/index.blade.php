@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="x_panel">

        <div class="x_title">
            <h2>Applicant List</h2>
            <div class="clearfix"></div>
        </div>
        @if (Session::has('message'))
            <div class="alert alert-success" >{{ Session::get('message') }}</div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <div class="x_content">
            <table id="applicant_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>Sl. No</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Designation</th>
                    <th>Resume</th>
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
        var table = $('#applicant_list').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.ajax.show_applicant') }}",
            columns: [
                {data: 'id', name: 'id',searchable: true},
                {data: 'full_name', name: 'full_name',searchable: true},      
                {data: 'email', name: 'email',searchable: true},      
                {data: 'mobile', name: 'mobile',searchable: true},      
                {data: 'designation', name: 'designation',searchable: true},      
                {data: 'resume', name: 'resume',searchable: true},      
                {data: 'action', name: 'action',searchable: true},      
            ]
        });
    })
</script>
@endsection