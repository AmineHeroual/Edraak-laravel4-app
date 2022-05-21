@extends('products.layout')


@section('content')


	<div class="container" style="padding-top: 12%;">
	<div class="card" >

  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"> Product Name: {{ $product->name}} </p>
    <a href="#" class="btn btn-primary">you are the best firend </a>
  </div>
</div>
</div>

<div class="container" style="padding-top: 2%;">
	<div class="mb-3">
  <label for="exampleFormControlInput1" {{ $product->name}}</label>

</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" {{ $product->price}}</label>
</div>
<div class="mb-3">
 {!! $product->detail !!}
</div>

<a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Go back To The Products Table</a>
</div>


@endsection
