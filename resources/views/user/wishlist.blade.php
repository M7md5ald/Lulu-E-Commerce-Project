@extends('user.layout.index')

@section('user_content')
<div class="container py-5">
    <h2 class="mb-4">Your Wishlist</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(!$wishlist || $wishlist->items->isEmpty())
        <p>Your wishlist is empty.</p>
    @else
        <div class="row">
            @foreach($wishlist->items as $item)
                <div class="col-md-4">
                    <div class="card mb-3 shadow-sm">
                        <img src="{{ asset('storage/' . $item->product->image) }}"
                             class="card-img-top"
                             alt="{{ $item->product->name }}"
                             style="height:200px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->product->name }}</h5>
                            <p class="card-text">${{ $item->product->price }}</p>

                            <form action="{{ route('wishlist.remove', $item->product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
