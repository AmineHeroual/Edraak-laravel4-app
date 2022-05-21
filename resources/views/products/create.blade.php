@extends('products.layout')


@section('content')

<form action="{{ route('products.store')}}" method="POST">
	@csrf
	<div class="container" style="padding-top: 12%;">
	<div class="card" >

  <div class="card-body">
    <h5 class="card-title">add a new product</h5>
    <p class="card-text">add a new product </p>
    <a href="#" class="btn btn-primary"> you are the best friend</a>
  </div>
</div>
</div>

<div class="container" style="padding-top: 2%;">
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Product Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Price</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="price" placeholder="Product Price">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Product Detail</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="detail" rows="3"></textarea>
</div>

<div class="mb-3">
	<button type="submit" class="btn btn-primary">Save</button>
</div>
</div>
</form>

@endsection
