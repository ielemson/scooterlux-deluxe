@extends('dashboard')

@section('frontend_style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('userdashboard_content')

    <div class="table-responsive">
        <table id="myOrder" class="table table-hover table-bordered display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Invoice No</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <td scope="row">{{ $loop->index+1 }}</td>
                    <td>{{ $order->created_at->diffForHumans() }}</td>
                    <td>{{ $order->invoice_number }}</td>
                    <td>
                        @php
                        $amount = $order->amount
                    @endphp
                    @money($amount, 'NGN')
                    
                    </td>
                    <td>{{ $order->payment_method }}</td>
                    <td>
                        @if ($order->status == 'pending')
                        <span class="badge badge-primary">{{ $order->status }}</span>
                        @elseif ($order->status == 'confirmed')
                        <span class="badge badge-secondary">{{ $order->status }}</span>
                        @elseif ($order->status == 'processing')
                        <span class="badge badge-info">{{ $order->status }}</span>
                        @elseif ($order->status == 'picked')
                        <span class="badge badge-warning">{{ $order->status }}</span>
                        @elseif ($order->status == 'shipped')
                        <span class="badge badge-light">{{ $order->status }}</span>
                        @elseif ($order->status == 'delivered')
                        <span class="badge badge-success">{{ $order->status }}</span>
                        @else
                        <span class="badge badge-danger">{{ $order->status }}</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('order-deatils', $order->id) }}" class="btn btn-md btn-primary">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('invoice-download', $order->id) }}" class="btn btn-md btn-danger">
                                <i class="fa fa-download"></i>
                                
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>No order placed yet!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection

@section('frontend_script')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myOrder').DataTable();
} );
</script>
@endsection
