@extends('admin.layout.index')
@section('admin_content')

<div class="page-wrapper py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-7">
        <div class="card shadow-sm border-0 rounded">
          <div class="card-header bg-success text-white text-center fs-4 fw-semibold">
            Edit Stock
          </div>
          <div class="card-body">
            <form action="{{ route('stocks.update', $stock) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Product Name</label>
                  <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-tag"></i></span>
                      <input type="text" 
                              name="name" 
                              class="form-control form-control-lg readonly-field" 
                              value="{{ old('name', $product->name) }}" 
                              readonly>
                  </div>
                  <div class="form-text text-muted mt-1">
                      <i class="fas fa-info-circle me-1"></i>Product name cannot be edited in stock management
                  </div>
              </div>

              <div class="mb-3">
                <label for="quantity" class="form-label fw-semibold">Quantity</label>
                <input
                  type="number"
                  name="quantity"
                  class="form-control form-control-lg"
                  value="{{ old('quantity', $stock->quantity) }}"
                  required
                >
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success fw-semibold">
                  Save Product
                </button>
                <a href="{{ route('stocks.view') }}" class="btn btn-secondary fw-semibold">
                  Cancel
                </a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection