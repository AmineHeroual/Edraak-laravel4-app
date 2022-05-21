@extends('products.layout')
@extends('products.welcome')

@section('content')
<div class="container">

<a class="btn btn-info btn-lg container" href="{{ route('products.index') }}" role="button">Click Here To Show Products Table</a>
</div>

@endsection