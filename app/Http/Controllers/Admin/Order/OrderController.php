<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        return view('admin.order.index');
    }

    public function show(){
        $query = Order::latest();
            return datatables()->of($query->get())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $action = '<a  href="'.route('admin.show_order', ['id' => encrypt($row->id)]).'" target="_blank" class="btn btn-primary">View</a>
                <a  href="'.route('admin.order_invoice', ['id' => encrypt($row->id)]).'" target="_blank" class="btn btn-warning">Invoice</a>
                <a  href="'.route('admin.delete_order', ['id' => encrypt($row->id)]).'" class="btn btn-danger">Delete</a>
                ';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function showOrder($id){
        try{
            $id = decrypt($id);
        }catch(DecryptException $e) {
            abort(404);
        }
        $order = Order::find($id);
        return view('admin.order.show', compact('order'));
    }

    public function orderInvoice($id){
        try{
            $id = decrypt($id);
        }catch(DecryptException $e) {
            abort(404);
        }
        $order = Order::find($id);
        return view('admin.order.invoice', compact('order'));
    }

    public function destroyOrder($id){
        try{
            $id = decrypt($id);
        }catch(DecryptException $e) {
            abort(404);
        }
        $order = Order::find($id);
        if($order->delete()){
            return redirect()->back()->with('message', 'Order Deleted Successfully!');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
