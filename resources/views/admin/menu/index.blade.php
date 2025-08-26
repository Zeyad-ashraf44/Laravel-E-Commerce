
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Admin Menu Management</h2>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Form to Add New Menu Item --}}
        <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
            @csrf
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="description" class="form-control" placeholder="Description">
                </div>
                <div class="col-md-2">
                    <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" required>
                </div>
                <div class="col-md-2">
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </form>

        {{-- Menu Items Table --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                  
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menuItems as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>${{ $item->price }}</td>
                        
                          
                        <td>
                            {{-- You can make a modal or separate edit page --}}
                            <form action="{{ route('admin.menu.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            {{-- Edit option optional --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
