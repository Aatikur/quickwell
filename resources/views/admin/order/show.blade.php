@extends('admin.template.admin_master')

@section('content')
<div class="right_col" role="main">
    <div class="row">    
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" id="printable">
                    <div class="x_title" style="border-bottom: white;">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div style="text-align: center"><h3>Order Detail</h3></div>

                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <h2>Order Account<small></small></h2><br><br>
                            <table> 
                                <tr>
                                <th>Name : </th>
                                <td>{{ $order->full_name }}</td>
                                </tr>
                                <tr>
                                <th>Email : </th>
                                <td>{{ $order->email }}</td>
                                </tr>
                                <tr>
                                <th>Mobile No : </th>
                                <td>{{ $order->mobile }}</td>
                                </tr>
                                <tr>
                                <th>Purchase Date : </th>
                                <td>{{ \Carbon\Carbon::parse($order->created_at)->toDayDateTimeString() }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <h2>Payment Info.<small></small></h2><br><br>
                            <table> 
                                <tr>
                                <th>Order ID : </th>
                                <td>{{ $order->order_id }}</td>
                                </tr>
                                <tr>
                                    <th>Paymen Status : </th>
                                    @if($order->status == 1)
                                        <td>PAID</td>
                                    @else
                                        <td>Failed</td>
                                    @endif
                                </tr>
                                <tr>
                                {{-- <th>Status : </th>
                                <td>
                                        @if($order->payment_status == 1)
                                            Failed
                                        @elseif($order->payment_status == 2) 
                                        @if($order->cashondelivery == 1)
                                            COD PAY
                                        @else
                                            Paid VIA Online Pay
                                        @endif
                                        @else
                                            No Action
                                        @endif
                                </td> --}}
                                </tr>
                                <tr>
                                <th>Order Date : </th>
                                <td>{{ \Carbon\Carbon::parse($order->created_at)->toDayDateTimeString() }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <h2>Billing Address<small></small></h2><br><br>
                        <table>
                                <tr>
                                <th>Name : </th>
                                <td>{{ $order->full_name }}</td>
                                </tr> 
                                <tr>
                                <th>Address : </th>
                                <td>{{ $order->address }}</td>
                                </tr>
                                <tr>
                                <th>Email : </th>
                                <td>{{ $order->email }}</td>
                                </tr> 
                                <tr>
                                <th>Mobile No : </th>
                                <td>{{ $order->mobile }}</td>
                                </tr>
                        </table>   
                        </div>
                    </div>
                        <div class="x_content table-responsive">
                            <table class="table table-striped jambo_table bulk_action" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                    <th>Sl</th>
                                    <th>Package Name</th>
                                    <th>No of Days</th>
                                    <th>Start Date</th>
                                    <th>Rate</th>
                                    <th>Sub-Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $slno = 1;
                                    @endphp
                                        <tr>
                                            <td>{{ $slno++ }}</td>
                                            <td>{{ $order->package_name }}</td>
                                            <td>{{ $order->days }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>₹ {{ number_format($order->package_rate, 2) }}</td>
                                            <td>₹ {{ number_format($order->sub_total, 2 )}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="right">Total: </td>
                                            <td>₹ {{ number_format($order->total, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="right">Net Payable Amount: </td>
                                            <td>₹ {{ number_format($order->total, 2) }}</td>
                                        </tr>                    
                                </tbody>
                            </table>
                            <center>
                                <a class="btn btn-warning" onclick="window.close();">Close</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
