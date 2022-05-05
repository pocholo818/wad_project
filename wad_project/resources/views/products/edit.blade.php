@extends('layout.master')

@section('content')
    <h1 class="text-center">Add Product</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems in your input. <br><br>
        
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
            <label>Product Code</label>
            <input type="text" name="code" value="{{ $product->code }}"  class="form-control" maxlength="5" placeholder="Enter Product Code">
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea name="desc" class="form-control" placeholder="Product Description" rows="3">{{ $product->desc }}</textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" name="price" value="{{ $product->price }}"  step="any" class="form-control" placeholder="Enter Product Price">
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop