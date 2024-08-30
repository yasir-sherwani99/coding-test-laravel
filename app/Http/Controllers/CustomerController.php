<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(isset($request->keyword)) {
            $keyword = $request->keyword;

            $orders = Order::with(['items', 'address', 'customers'])
                        ->whereHas('customers', function($q) use ($keyword) {
                            $q->where('email', 'LIKe', "%{$keyword}%");
                        })
                        ->orWhereHas('items.products', function($q) use ($keyword) {
                            $q->where('name', 'LIKe', "%{$keyword}%");
                        })
                        ->orWhere('invoice', 'LIKE', "%{$keyword}%")
                        ->get();    
        } else {
            $orders = Order::with(['items', 'address', 'customers'])->get();
        }
        
        return view('customers.index', compact('orders'));
    }
}
