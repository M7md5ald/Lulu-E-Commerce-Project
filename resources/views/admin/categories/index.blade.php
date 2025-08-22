@extends('admin.dashboard.index')
@section('admin_content')
<div class="page-wrapper py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-semibold">Categories</h2>
            <a href="{{ route('categories.create') }}" class="btn btn-success fw-semibold">
                + Add New Category
            </a>
        </div>

        <div class="card shadow-sm border-0 rounded">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Actions</th>
                                <th>create_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->create_at}}</td>
                                    <td>
                                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-warning me-1">
                                            Edit
                                        </a>
                                        <form action="{{route('categories.delete',$categories->id)}}" method="POST" class="d-inline">
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