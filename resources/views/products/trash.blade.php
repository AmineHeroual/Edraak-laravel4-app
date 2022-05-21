@extends('products.layout')


@section('content')

<div class="jumbotron container">


  <hr class="my-4">
  <p>Trashed Products: </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Home</a>
  </p>
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
      			<a class="btn btn-warning" href="{{ route('product.back.from.trash',$item->id)}}"> Back </a>
      		</div>

            <div class="col-sm">
                <a class="btn btn-danger" href="{{ route('product.delete.from.database',$item->id)}}"> Delete of Ever </a>
            </div>
      	</div>




      </td>
    </tr>
  	@endforeach


  </tbody>
</table>


</div>

@endsection
