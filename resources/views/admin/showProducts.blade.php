{{-- Categories Page --}}
@extends('admin.master')
@section('content')

<h2>All Products {{ $products->count() }} </h2>






<table class="table table-bordered">
    <tr class="bg-dark text-white">
        <th>ID</th>
        <th>Name</th>
        <th>Peice</th>
        <th>Quantity</th>
        <th>Serial_number</th>
        <th>Crated At</th>
        <th>Actions</th>
    </tr>
    @forelse ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->peice }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product->serial_number }}</td>
        <td>{{ $product->created_at->diffForHumans() }}</td>
        <td>
            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary btn-sm">Edit</a>
            <form class="d-inline" action="{{ route('product.destroy',$product->id) }}" method="POST">
                @csrf
                {{-- @method('delete') --}}
                <button onclick="return confirm('Are you sour?!')" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @empty
        <tr>
            <td colspan="8"class="text-center">No Data Found</td>
        </tr>
    @endforelse
    
</table>
@stop