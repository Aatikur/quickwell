<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Invoice</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        <link rel="stylesheet" href="./style.css">
        <style>.borderless tr {border: none;}</style>
    </head>
    <body>
        <!-- partial:index.partial.html -->
        <div class="container">
            <div class="panel panel-default mb-5">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="col-md-4 pull-left">
                                <strong>ORDER ID: {{ $order->order_id }}</strong><br>
                                Created: {{ $order->created_at }} <br>
                                Due: {{ $order->expires_at }}
                            </div>
                            <div class="col-md-4 pull-right">
                                <img src="{{asset('web/images/logo2.png')}}" alt="logo" class="" style="max-width: 100px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-6 mb-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Supplier:
                            </div>
                            <div class="panel-body">
                                <address>
                                    <strong>Quickwell Remedy</strong> <br>
                                    Reg. com.: rgdsfgsdf2 -3 <br>
                                    Adress: 103, Janak Palace, Manglam Enclave, RPS more Bailey Road, Patna- 801503<br>
                                    Phone: 1800-419-4948 | +91-8797071501 <br>
									Email: info@quickwellhealthcare.com   
                                </address>
                            </div>
                        </div>                
                    </div>
                    <div class="col-md-6 mb-3 text-right">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Client:
                        </div>
                        <div class="panel-body">
                            <address>
                                <strong>{{ $order->full_name }}</strong> <br>
                                {{-- Adress: 103, Janak Palace, Manglam Enclave, RPS more Bailey Road, Patna- 801503<br> --}}
                                Phone: +91 {{ $order->mobile }} <br>
                                Email: {{ $order->email }}  <br>
                            </address>
                        </div>
                        </div>
                    </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Package </th>
                            <th>No of days </th>
                            <th>Rate.    </th>
                            <th>Start date   </th>
                            <th class="text-right">Subtotal </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $order->package_name }} </td>
                            <td>{{ $order->days }} </td>
                            <td>{{ number_format($order->package_rate, 2) }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td class="text-right">{{ number_format($order->sub_total, 2) }}  </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <strong>GST</strong>: 18% <br>
                        {{-- <strong>Expiration date</strong>: {{ $order->expires_at }}<br> --}}
                        <strong>Payment Status</strong>: Paid <br>
                        <strong>Purchased on</strong> {{ $order->created_at }} at 18:02 <br>
                    </div>
                    <div class="col-md-6">
                        <table class="table borderless">
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-right">Subtotal</th>
                                    <th class="text-right">{{ number_format($order->sub_total, 2) }}</th>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-right">GST 18%</th>
                                    <th class="text-right">{{ number_format($order->gst, 2) }}</th>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-right">TOTAL</th>
                                    <th class="text-right">{{ number_format($order->total, 2) }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <div class="panel-footer" style="height: 5rem;">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-success" onclick="window.print()">Print</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->
    </body>
</html>
