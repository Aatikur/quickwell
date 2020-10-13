<?php

namespace App\Http\Controllers\Frontend\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function index(){
        $orders = Order::latest()->paginate(10);
        return view('web.account.account', compact('orders'));
    }
}
