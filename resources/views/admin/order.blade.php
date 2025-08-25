@extends('admin.layout.index')
@section('admin_content')

<div class="page-wrapper d-flex align-items-center justify-content-center"
    style="background-color: #f8f9fa; min-height: 100vh">
    <div class="col-md-6 col-lg-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-semibold">All Orders</h2>
            <a href="{{ route('categories.create') }}" class="btn btn-success fw-semibold">
                + Add New Category
            </a>
        </div>

        <div class="card shadow-sm border-0 rounded">
            <div class="card-body p-3"> {{-- Add padding --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>User ID</th>
                                <th>Payment ID</th>
                                <th>Coupon ID</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->current_name }}</td>
                                    <td>{{ $order->current_email }}</td>
                                    <td>{{ $order->current_phone_number }}</td>
                                    <td>{{ $order->total_amount }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->user_id }}</td>
                                    <td>{{ $order->payment_id }}</td>
                                    <td>{{ $order->coupon_id }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" 
                                           class="btn btn-sm btn-warning me-1">
                                            Edit
                                        </a>
                                        <form action="{{ route('categories.delete', $category->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this category?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection