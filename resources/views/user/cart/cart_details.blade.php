<div class="table-responsive">
    <table class="table table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>Price</th>
                <th>Quantity</th>
                <th>Product ID</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cartItems as $CartItem)
            <tr>
                <td>{{ '$' . number_format($CartItem->price, 2) }}</td>
                <td>{{ $CartItem->quantity }}</td>
                <td>{{ $CartItem->product_id }}</td>
                <td>
                    @if($CartItem->product && $CartItem->product->image)
                        <img src="{{ asset('storage/' . $CartItem->product->image) }}" width="50">
                    @else
                        <span class="text-muted">No Image</span>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">No products in cart.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="text-end mt-2">
        <strong>Total: ${{ number_format($totalPrice, 2) }}</strong>
    </div>
</div>
