@extends('products.layout')
@extends('products.welcome')

@section('content')

<div class="jumbotron container">


  <hr class="my-4">
  <p>This is Amine App </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{ route('products.create') }}" role="button">Create</a>
    <a class="btn btn-primary btn-lg" href="{{ route('product.trash') }}" role="button">Trash</a>
  </p>
</div>

<div class="container">
	@if ($message = Session::get('success'))
	<div class="alert alert-primary" role="alert">
  {{$message}}
</div>
	@endif

</div>

<div class="container">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col" style="width: 400px;">action</th>
    </tr>
  </thead>
  <tbody>
  	@php
  		$i = 0;
    
  	@endphp
  	@foreach ($product as $item)
  	<tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$item->name}} </td>
      <td>{{$item->price}} $</td>
      <td>
      	<div class="row">
      		<div class="col-sm">
      			<a class="btn btn-success" href="{{ route('products.edit',$item->id)}}">Edit</a>
      		</div>
      		<div class="col-sm">
      			<a class="btn btn-primary" href="{{ route('products.show',$item->id)}}">Show</a>
      		</div>
      		{{-- <div class="col-sm">
      			<a class="btn btn-warning" href="{{ route('soft.delete',$item->id)}}">Soft Delete</a>
      		</div> --}}
      		<div class="col-sm">
      			<form action=" {{ route('products.destroy', $item->id)}} " method="POST">
      			@csrf
      			@method('DELETE')
      			<button type="submit" class="btn btn-danger">Delete</button>
      		</form>
      		</div>
      	</div>




      </td>
    </tr>
  	@endforeach


  </tbody>
</table>

{{ $product->links() }}
</div>

@endsection
