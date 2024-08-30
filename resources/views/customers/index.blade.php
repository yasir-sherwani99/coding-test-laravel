@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row d-flex justify-content-center align-items-center mb-2">
            <div class="col-lg-12">
                <form method="post" action="{{ route('search') }}">
                    @csrf
                    <div class="search">
                        <i class="fa fa-search text-muted"></i>
                        <input 
                            type="text" 
                            class="form-control"
                            name="keyword" 
                            placeholder="Search by customer email, order number or product name"
                        />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title pt-1">Orders</h5>
                    </div>
                    <div class="card-body">
                        @if(count($orders) > 0)
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order #</th>
                                            <th>Customer</th>
                                            <th>Products</th>
                                            <th>Subtotal</th>
                                            <th>Qty</th>
                                            <th>Shipping</th>
                                            <th>Tax</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $key => $order)
                                            <tr>
                                                <td class="align-middle">{{ $key + 1 }}</td>
                                                <td class="align-middle">{{ $order->invoice }}</td>
                                                <td class="align-middle">
                                                    {{ $order->customers->first_name . ' ' . $order->customers->last_name }}
                                                    <br />
                                                    <small class="text-muted">{{ $order->customers->email }}</small>
                                                </td>
                                                <td class="align-middle">
                                                    @if(isset($order->items))
                                                        <ul class="mb-0">
                                                            @foreach($order->items as $item)
                                                                <li><small>{{ $item->products->name }}</small></li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </td>
                                                <td class="align-middle">{{ $order->subtotal }}</td>
                                                <td class="align-middle">{{ $order->qty }}</td>
                                                <td class="align-middle">{{ $order->shipping_charges }}</td>
                                                <td class="align-middle">{{ $order->tax }}</td>
                                                <td class="align-middle">{{ $order->discount }}</td>
                                                <td class="align-middle">{{ $order->grandtotal }}</td>
                                                <td class="align-middle">
                                                    @if($order->payment_status == "pending") 
                                                        <span class="badge text-bg-warning">Pending</span>
                                                    @elseif($order->payment_status == "paid")
                                                        <span class="badge text-bg-success">Paid</span>
                                                    @elseif($order->payment_status == "canceled")
                                                        <span class="badge text-bg-danger">Cancel</span>
                                                    @elseif($order->payment_status == "declined")
                                                        <span class="badge text-bg-danger">Decline</span>
                                                    @elseif($order->payment_status == "error")
                                                        <span class="badge text-bg-danger">Error</span>
                                                    @else
                                                        <span class="badge text-bg-info">Refund</span>
                                                    @endif
                                                </td>
                                                <!-- <td class="align-middle">
                                                    <button 
                                                        class="btn btn-secondary btn-sm" 
                                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                                    >
                                                        Details
                                                    </button>
                                                </td> -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p>No matching records found.
                        @endif      
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection