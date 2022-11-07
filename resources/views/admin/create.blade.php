@extends('admin.master')
@section('content')
    <h2>Add New Product</h2>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="price" placeholder="Price">
        </div>
       
        <div class="mb-3">
            <input type="number" class="form-control" name="quantity" placeholder="Quantity">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="serial_number" placeholder="Serial Number">
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
        <button class="btn btn-success btn-lg">SAVE</button>
    </form>
@stop
