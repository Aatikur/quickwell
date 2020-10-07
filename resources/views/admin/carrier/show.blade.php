@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="x_panel">
    <div class="x_title">
      <h2>{{ $carrier->designation }}</h2>
      <div class="clearfix"></div>
    </div>
    
    <div class="x_content">
        <table class="table">
            <th>Designation</th>
            <td>{{ $carrier->designation }}</td>
            <th>Educational Qualification</th>
            <td>{{ $carrier->educational_qualification }}</td>
            <th>Work Experience</th>
            <td>{{ $carrier->work_experience }}</td>
            <th>Role and Responsibilty</th>
            <td>{!! $carrier->role !!}</td>
        </table>
        <button class="btn btn-danger pull-right" onclick="window.close()">Close</button>
    </div>
  </div>
</div>
 @endsection