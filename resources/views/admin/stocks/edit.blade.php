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
                <label class="form-label fw-semibold">Name</label>
                <div class="form-control form-control-lg bg-light">
                  {{ old('name', $stock->product->name) }}
                </div>
                <input type="hidden" name="name" value="{{ old('name', $stock->product->name) }}">
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Price</label>
                <div class="form-control form-control-lg bg-light">
                  ${{ number_format(old('price', $stock->product->price), 2) }}
                </div>
                <input type="hidden" name="price" value="{{ old('price', $stock->product->price) }}">
              </div>

              <div class="mb-3">
                <label for="quantity" class="form-label fw-semibold">Quantity</label>
                <input
                  type="number"
                  name="quantity"
                  class="form-control form-control-lg"
                  value="{{ old('quantity', $stock->quantity) }}"
                  required>
              </div>

              <div class="mb-3">
                <label for="category_id" class="form-label fw-semibold">Category</label>
                <div class="form-control form-control-lg bg-light">
                  @foreach($categories as $category)
                  <option value="{{ $category->id }}">
                    @if ($stock->product->category_id == $category->id)
                    {{ $category->name }}
                    @endif
                  </option>
                  @endforeach
                </div>
                </div>

                <div class="mb-3">
                  <label for="image" class="form-label fw-semibold">Product Image</label>
                  @if ($stock->product->image)
                  <div class="mt-2">
                    <img src="{{ asset('storage/' . $stock->product->image) }}" alt="Current Image"
                      class="img-thumbnail" width="100">
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                  <label class="form-label fw-semibold">Description</label>
                  <div class="form-control form-control-lg bg-light">
                    ${{ old('description', $stock->product->description) }}
                  </div>
                  <input type="hidden" name="description" value="{{ old('description', $stock->product->description) }}">
                </div>

                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-success fw-semibold">
                    Save
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