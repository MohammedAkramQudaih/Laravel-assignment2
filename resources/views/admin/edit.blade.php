@extends('admin.master')
@section('content')
    <h2>Add New Product</h2>
    <form action="{{ route('product.update',$products->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name"
                value="{{ old('name', $products->name) }}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="peice" placeholder="Price"
                value="{{ old('peice', $products->peice) }}">
        </div>

        <div class="mb-3">
            <input type="number" class="form-control" name="quantity" placeholder="Quantity"
                value="{{ old('quantity', $products->quantity) }}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="serial_number" placeholder="Serial Number"
                value="{{ old('serial_number', $products->serial_number) }}">
        </div>
        <div class="mb-3">
            <select class="form-control" name="category_id" id="">
                <option value="" selected disabled>Select Category</option>
                @foreach ($categories as $category)

                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select class="form-control" name="discount_id" id="">
                <option value="" disabled selected>Select Discount</option>
                @foreach ($discounts as $discount)
                    <option value="{{ $discount->id }}">{{ $discount->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-warning btn-lg">UPDATE</button>
    </form>
@stop
