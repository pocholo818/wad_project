@extends('layout.master')

@section('content')
    <h1 class="text-center">Add Product</h1>

    <a href="{{ url('/products') }}" class="btn btn-success btn-sm">
        <i class="fa fa-plus" aria-hidden="true"></i>Go Back
    </a>

    <form action="{{ url('product') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Product Name</label>
            <input type="email" name="prod_name" class="form-control" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
            <label>Product Code</label>
            <input type="email" name="prod_code" class="form-control" placeholder="Enter Product Code">
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea name="prod_desc" class="form-control" placeholder="Product Description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" name="prod_price" class="form-control" placeholder="Enter Product Price">
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop