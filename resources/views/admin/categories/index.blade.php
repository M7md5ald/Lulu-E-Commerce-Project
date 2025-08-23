@extends('admin.layout.index')

@section('admin_content')
<div class="page-wrapper d-flex align-items-center justify-content-center"
    style="background-color: #f8f9fa; min-height: 100vh">
    <div class="col-md-6 col-lg-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-semibold">Categories</h2>
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
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->created_at }}</td>
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