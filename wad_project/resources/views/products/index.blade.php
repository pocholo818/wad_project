@extends('layout.master')

@section('content')
  <h1 class="text-center">Products Page</h1>

  <a href="{{ route('products.create') }}" class="btn btn-success btn-sm">
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
      <th scope="col" colspan="2">Action</th>
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
      <form action="{{ route('products.destroy', $product->id) }}" method="post">
        <td><a class="btn btn-info" href="{{ route('products.show', $product->id) }}">View</a></td>
        <td><a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a></td>
        <td>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection