@extends('layout.master')

@section('content')
  <h1 class="text-center">Products Page</h1>

  <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm">
    <i class="fa fa-plus" aria-hidden="true"></i> Add New
  </a>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Code</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Creation Date</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->code }}</td>
      <td>{{ $product->desc }}</td>
      <td>P{{ $product->price }}</td>
      <td>{{ $product->created_at }}</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection