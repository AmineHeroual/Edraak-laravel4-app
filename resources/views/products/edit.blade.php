@extends('products.layout')


@section('content')

<form action="{{ route('products.update', $product->id)}}" method="POST">
	@csrf
  @method('PUT')

	<div class="container" style="padding-top: 12%;">
	<div class="card" >

  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"> Product Name: {{ $product->name}} </p>
    <a href="#" class="btn btn-primary">Go back firend</a>
  </div>
</div>
</div>

<div class="container" style="padding-top: 2%;">
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $product->name}}" placeholder="Product Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Price</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="price" value="{{ $product->price}}" placeholder="Product Price">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Product Detail</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="detail" rows="3"> {!! $product->detail !!} </textarea>
</div>

<div class="mb-3">
	<button type="submit" class="btn btn-primary">Update</button>
</div>
</div>
</form>

@endsection
