@extends('layouts.app')

@section('title', $product['name'])
@section('content')

<h1>MY PRODUCTS STOCK</h1>
<h3>Jayvee Alapide</h3>
<header class="bg-white">
 <h1>{{$product['name'] }}</h1>

        <p>Price {{$product['price'] }}</p>
        <p>Stock {{$product['stock'] }}</p>
        <p>Tag {{$product['brand'] }}</p>
        <p>Package {{$product['package'] }}</p>
</header>
          <p><a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a></p>-
@endsection