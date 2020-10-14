@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
     <!-- top tiles -->
     <div class="row tile_count">
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count" style="text-align: center">
        <span class="count_top"><i class="fa fa-user"></i> Total User</span>
        <div class="count green">{{ $user }}</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"  style="text-align: center">
        <span class="count_top"><i class="fa fa-clock-o"></i> Total Order</span>
        <div class="count green">{{ $order }}</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"  style="text-align: center">
          <span class="count_top"><i class="fa fa-user"></i> Total Testimonial</span>
          <div class="count green">{{ $testimonial }}</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"  style="text-align: center">
        <span class="count_top"><i class="fa fa-user"></i> Total Applicant</span>
        <div class="count green">{{ $applicant }}</div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count"  style="text-align: center">
        <span class="count_top"><i class="fa fa-user"></i> Total Blog Post</span>
        <div class="count green">{{ $blog }}</div>
      </div>
      
    </div> 
    <!-- /top tiles -->

  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
            <h2>Order List</h2>
            <div class="clearfix"></div>
        </div>
        <div>
          <div class="x_content">
            <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Order ID</th>
                    <th>Package Name</th>
                    <th>Days</th>
                    <th>Name</th>
                    <th>Mobile</th>
                </tr>
              </thead>
              <tbody class="form-text-element">
                  @if(isset($orders) && !empty($orders))
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$order->order_id}}</td>
                        <td>{{$order->package_name}}</td>
                        <td>{{ $order->days }}</td>
                        <td>{{ $order->full_name }}</td>
                        <td>{{ $order->mobile }}</td>
                    </tr>
                    @endforeach
                  @else
                    <tr>
                        <td colspan="6" class="text-center">No Orders Found</td>
                    </tr>
                  @endif
              </tbody>
            </table>
            <a href="{{ route('admin.order') }}" class="btn btn-primary pull-right">Show More...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 @endsection
