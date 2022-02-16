
@extends('shop.layout.master')

@section('content')
    @include('shop.includes.header')

    @include('shop.auth.includes.breadcrumb',['dashboard'=>'Profile Update'])

<!-- My Account Area -->
 <section class="my-account-area section_padding_100_50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="my-account-navigation mb-50">
                    @include('shop.auth.includes.sidebar')
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="my-account-content mb-50">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Shipping Details</h4>
                                </div>
                                <hr>
                                <div class="card-body" style="background: #E9EBEC;">
                                    <table class="table">
                                        <tr>
                                            <th> Shipping Name : </th>
                                            <th> {{ $order->shipping_name }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Shipping Phone : </th>
                                            <th> {{ $order->shipping_phone }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Shipping Email : </th>
                                            <th> {{ $order->shipping_email }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Country : </th>
                                            <th> {{ $order->country }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> State : </th>
                                            <th> {{ $order->state->name }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> LGA : </th>
                                            <th>{{ $order->lga->name }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Post Code : </th>
                                            <td> {{ $order->post_code }} </td>
                                        </tr>
                    
                                        <tr>
                                            <th> Order Date </th>
                                            <td> {{ $order->order_date }} </td>
                                        </tr>
                    
                                    </table>
                                </div>
                    
                            </div>
                    
                        </div> <!-- // end col md -6 -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Order Details
                                        <span class="text-danger"> Invoice : {{ $order->invoice_number }}</span>
                                    </h4>
                                    @if ($order->status == 'pending')
                    
                                    @else
                                    <ul>
                                        <li> Confirmed Date: {{ $order->confirmed_date }}</li>
                                        <li> Processing Date: {{ $order->processing_date }}</li>
                                        <li> Picked Date: {{ $order->picked_date }}</li>
                                        <li> Shipped Date: {{ $order->shipped_date }}</li>
                                        <li> Delivered Date: {{ $order->delivered_date }}</li>
                                        <li> Cancel Date: {{ $order->cancel_date }}</li>
                                        <li> Return Date: {{ $order->return_date }}</li>
                                    </ul>
                                    @endif
                                </div>
                                <hr>
                                <div class="card-body" style="background: #E9EBEC;">
                                    <table class="table">
                                        <tr>
                                            <th> Name : </th>
                                            <th> {{ $order->user->name }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Phone : </th>
                                            <th> {{ $order->user->phone_number }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Payment Type : </th>
                                            <th> {{ $order->payment_method }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Tranx ID : </th>
                                            <th> {{ $order->transaction_id }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Invoice : </th>
                                            <th class="text-danger"> {{ $order->invoice_number }} </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Order Total : </th>
                                            <th>
                                                @php
                                                $orderTotal = $order->amount;
                                                @endphp
                                                @money($orderTotal, 'NGN')
                                            </th>
                                        </tr>
                    
                                        <tr>
                                            <th> Order : </th>
                                            <th>
                                                <span class="badge badge-pill badge-warning"
                                                    style="background: #418DB9;">{{ $order->status }} </span>
                                            </th>
                                        </tr>
                    
                                    </table>
                                </div>
                            </div>
                        </div> <!-- // 2ND end col md -5 -->
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr style="background: #e2e2e2;">
                                            <td class="col-md-1">
                                                <label for=""> Image</label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for=""> Product Name </label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for=""> Product Code</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for=""> Color </label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for=""> Size </label>
                                            </td>
                                            <td class="col-md-1">
                                                <label for=""> Quantity </label>
                                            </td>
                                            <td class="col-md-1">
                                                <label for=""> Price </label>
                                            </td>
                                            <td class="col-md-1">
                                                <label for=""> Action </label>
                                            </td>
                                        </tr>
                                        @foreach ($orderItems as $item)
                                            <tr>
                                                <td class="col-md-1">
                                                    <label for=""><img src="{{ asset( $item->product->product_thumbnail ) }}"
                                                            height="50px;" width="50px;"> </label>
                                                </td>
                                                <td class="col-md-3">
                                                    <label for=""> {{ $item->product->product_name_en }}</label>
                                                </td>
                                                <td class="col-md-3">
                                                    <label for=""> {{ $item->product->product_code }}</label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for=""> {{ $item->color }}</label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for=""> {{ $item->size }}</label>
                                                </td>
                                                <td class="col-md-2">
                                                    <label for=""> {{ $item->qty }}</label>
                                                </td>
                    
                                                <td class="col-md-3">
                                                    <label for=""> 
                                                    @php
                                                    $unitPrice = $item->unit_price;
                                                    $totalPrice = $item->unit_price * $item->qty;
                                                    @endphp
                                                    @money($unitPrice, 'NGN')
                                                    @money($totalPrice, 'NGN') </label>
                                                </td>
                                                @php
                                                    $file = App\Models\Product::where('id', $item->product_id)->first();
                                                @endphp
                    
                                                <td class="col-md-1">
                                                    @if ($order->status == 'pending')
                                                        <strong>
                                                            <span class="badge badge-pill badge-success" style="background: #418DB9;"> No
                                                                File</span>
                                                        </strong>
                    
                                                    @elseif($order->status != 'pending')
                    
                                                        <a target="_blank" class="btn btn-primary btn-sm" href="{{ asset('upload/pdf/' . $file->digital_file) }}">
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- / end col md 8 -->
                    </div> <!-- // END ORDER ITEM ROW -->
                    @if ($order->status == 'delivered')
                    Delivered
                    @else
                        @php
                            $order = App\Models\Order::where('id', $order->id)
                                ->where('return_reason', '=', null)
                                ->first();
                        @endphp
                        @if ($order)
                            <form action="{{ route('return.order', $order->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="label"> Order Return Reason:</label>
                                    <textarea name="return_reason" id="" class="form-control" cols="30" rows="05">Return Reason</textarea>
                                </div>
                                <button type="submit" class="btn btn-danger">Order Return</button>
                            </form>
                        @else
                            <span class="badge badge-pill badge-warning" style="background: red">You Have send return request for this product</span>
                        @endif
                    @endif
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- My Account Area -->
@endsection

