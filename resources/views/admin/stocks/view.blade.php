@extends('admin.layout.index')
@section('admin_content')

    <div class="page-wrapper py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <!-- <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-semibold">Products</h2>
                <a href="{{ route('products.create') }}" class="btn btn-success fw-semibold">
                    + Add New Product
                </a>
            </div> -->

            <div class="card shadow-sm border-0 rounded">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>${{ number_format($product->price, 2) }}</td>
                                        <td>{{ $product->category->name ?? '—' }}</td>
                                        <td>
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image"
                                                    width="50" class="img-thumbnail">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>{{ $stock->quantity }}</td>
                                        <td>
                                            <a href="{{ route('stocks.edit', $stock->id) }}"
                                                class="btn btn-sm btn-warning me-1">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">No products available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

