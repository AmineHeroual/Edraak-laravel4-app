@extends('products.layout')
@extends('products.anonymous')
@extends('products.fish')
<div  style="background: radial-gradient(circle, #B9F8D3 20%, #97DBAE);">
  
@if (Route::has('login'))
    <div class="container d-grid gap-2 d-md-flex justify-content-md-end">
        @auth
            <a class="btn btn-info" role="button" aria-disabled="true" href="{{ url('dashboard') }}">Dashboard</a>
        @else
            <a class="btn btn-info" role="button" aria-disabled="true" href="{{ route('login') }}">Log in</a>

            @if (Route::has('register'))
                <a class="btn btn-info" role="button" aria-disabled="true" href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif
</div>


