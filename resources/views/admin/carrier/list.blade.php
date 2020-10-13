@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="x_panel">
    <div class="x_title">
      <h2>Job Openings</h2>
      <div class="clearfix"></div>
    </div>
    @if (Session::has('message'))
    <div class="alert alert-success" >{{ Session::get('message') }}</div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <div class="x_content">
        <table id="carrier_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Sl. No</th>
                <th>Designation</th>
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
     <script type="text/javascript">
         $(function () {
            var i = 1;
            var table = $('#carrier_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.ajax.carrier_list') }}",
                columns: [
                    { "render": function(data, type, full, meta) {return i++;}},
                    {data: 'designation', name: 'designation',searchable: true},
                    {data: 'action', name: 'action',searchable: true},
                ]
            });
            
        });
     </script>
@endsection