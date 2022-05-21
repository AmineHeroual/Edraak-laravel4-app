@extends('products.layout')
@extends('products.welcome')


@section('content')


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

</div>

<hr>
</div>
<div class="container">

<a class="btn btn-primary btn-lg container" href="{{ route('products.index') }}" role="button">Go back To The Products Table</a>
</div>
@endsection
