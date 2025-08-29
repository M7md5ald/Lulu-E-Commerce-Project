@extends('user.layout.index')
@section('content')

<div class="page-wrapper py-5" style="background-color: #f8f9fa; padding-top: 150px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card shadow-sm border-0 rounded">
                    <div class="card-header bg-success text-white text-center fs-4 fw-semibold">
                        Product Details
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Name</label>
                            <div class="form-control form-control-lg bg-light">
                                {{ $product->name }}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Price</label>
                            <div class="form-control form-control-lg bg-light">
                                ${{ number_format($product->price, 2) }}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Category</label>
                            <div class="form-control form-control-lg bg-light">
                                {{ $category->name }}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Product Image</label>
                            @if ($product->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image"
                                    class="img-thumbnail" width="150">
                            </div>
                            @else
                            <div class="form-control form-control-lg bg-light text-muted">
                                No image available
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Description</label>
                            <div class="form-control form-control-lg bg-light" style="min-height: 100px;">
                                {{ $product->description ?? 'No description available' }}
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <a href="{{ route('user.dashboard') }}" class="btn btn-secondary fw-semibold">
                                Go back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection