<?php

namespace App\Http\Controllers\Frontend\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Carbon\Carbon;
use App\Models\Order;
use Softon\Indipay\Facades\Indipay;  

class PackageController extends Controller
{
    public function showPackage($slug, $id) {
        $package = Package::find($id);
        return view('web.package.package_detail', compact('package'));
    }

    public function bookPackage(Request $request){
        $this->validate($request, [
            'full_name' => 'required',
            'date'      => 'required',
            'days'      => 'required'
        ]);
        $total = ($request->input('days') * $request->input('amount'));
        $sub_total = $total;
        $gst = ($total * 18)/100;
        $total += $gst;
        $orders = new Order;
        $orders->package_name = $request->input('package_name');
        $orders->full_name = $request->input('full_name');
        $orders->days = $request->input('days');
        $orders->mobile = $request->input('mobile');
        $orders->email = $request->input('email');
        $orders->address = $request->input('address');
        $orders->expires_at = Carbon::parse($request->input('date'))->addDays($request->input('days'));
        $orders->sub_total = $sub_total;
        $orders->total = $total;
        $orders->gst = $gst;
        $orders->package_rate = $request->input('amount');
        $transaction_no = $this->getTransactionID();
        if($orders->save()){
            $parameters = [
                'transaction_no' => $transaction_no,
                'amount' => $total,
                'firstname' => $request->input('full_name'),
                'phone' =>  $request->input('mobile'),
                'email' => $request->input('email'),
                'productinfo' => $request->input('package_name'),
                'curl' => url('response'),
              ];
              $order = Indipay::prepare($parameters);
              $orders->order_id = $transaction_no;
              $orders->save();
              $request->session()->put('order_id', $transaction_no);
              return Indipay::process($order);
        }
    }
   
    public function response(Request $request){
        $order_id = $request->session()->get('order_id');
        $order = Order::where('order_id', $order_id)->first();
        $request->session()->forget('order_id');
        if($order){
            $response = Indipay::response($request);
            if($response['status'] == "success" && $response['unmappedstatus'] == "captured"){
                $order->status = '1';
                $order->save();
                return view('web.payment.response', compact('response', 'order'));
            }else{
                return view('web.payment.response', compact('order'));
            }
        }
    }  

    public function invoice($id) {
        try{
            $id = decrypt($id);
        }catch(DecryptException $e) {
            abort(404);
        }
        $order = Order::find($id);
        return view('web.other.invoice', compact('order'));
    }
    public function PackageCancel(){
        dd('Payment Cancel!');
    }
    
    public function getTransactionID() {
        return substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    }
}
