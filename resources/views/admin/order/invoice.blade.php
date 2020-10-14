@extends('admin.template.admin_master')

@section('content')
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">

                  <section class="content invoice">
                        <div id="printableArea">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                           <h1>
                                <i class="fa fa-globe"></i> Invoice.
                                <small class="pull-right">Date: {{ date('d/m/Y') }}</small>
                            </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          From
                           <address>
                                <strong>Ciel Couture</strong>
                                <br>Guwahati, Assam
                                <br>Phone: 88638746953
                                <br>Email: info@cielcouture.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          Client
                          <address>
                                <strong>{{ $order->full_name }}</strong>
                                <br>{{ $order->address }}
                                <br>Phone: {{ $order->mobile }}
                                <br>Email: {{ $order->email }}
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice</b>
                          <br>
                          <br>
                          <b>Order ID:</b> {{ $order->order_id }}
                          <br>
                          <b>Payment Due:</b> {{ \Carbon\Carbon::parse($order->created_at)->toDayDateTimeString() }}
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Sl No</th>
                                <th>Package Name</th>
                                <th>Start Date</th>
                                <th>No of Days</th>
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
                                        <td>{{ $order->created_at}}</td>
                                        <td>{{ $order->days }}</td>
                                        <td>₹ {{ number_format($order->package_rate, 2) }}</td>
                                        <td>₹ {{ number_format($order->sub_total, 2) }}</td>
                                    </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>₹ {{ number_format($order->total, 2) }}</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>₹ {{ number_format($order->total, 2) }}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print"></i> Print</button>
                          <a class="btn btn-warning" onclick="window.close();">Close</a>
                        </div>
                      </div>
                  
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection

@section('script')
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    document.title = "Invoice";
    window.print();
    document.url = "";

    document.body.innerHTML = originalContents;
}
</script>
@endsection
