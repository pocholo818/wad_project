@extends('layout.master')

@section('content')
    <h1 class="text-center">Add Product</h1>

    <form action="{{ url('product'. $products->id) }}" method="POST">
        {!! @csrf_field() !!}
        @method("PATCH")
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