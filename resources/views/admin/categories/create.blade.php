@extends('admin.layout.index')
@section('admin_content')

<div class="page-wrapper d-flex align-items-center justify-content-center" 
     style="background-color: #f8f9fa; min-height: 100vh;">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm border-0 rounded">

            {{-- show insert message --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- show validation errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card-header bg-primary text-white text-center fs-4 fw-semibold">
                Create Category
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label fw-semibold">Category Name</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name"
                            placeholder="Enter category name">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-semibold">
                        Create Category
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
