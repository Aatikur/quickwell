@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="x_panel">
    <div class="x_title">
      <h2>Package List</h2>
      <div class="clearfix"></div>
    </div>
    @if (Session::has('message'))
    <div class="alert alert-success" >{{ Session::get('message') }}</div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <div class="x_content">
        <table class="table table-striped">
            <tr>
                <th>Package Name</th>
                <td>{{ $package->name }}</td>
                <th>Amount</th>
                <td>{{ $package->amount }}</td>
                <th>Feature</th>
                <td>{!! $package->feature !!}</td>
                <th>Descripttion</th>
                <td>{!! $package->desc !!}</td>
            </tr>
        </table>
    </div>
  </div>
</div>
 @endsection
