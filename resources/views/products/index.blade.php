@extends('layouts.app')

@section('title', 'All Products')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
 <h3>Products in my Store</h3>
    <p>Prepared by: Jayvee Espanola Alapide</p>

<a href="{{ route('products.create') }}" class="btn btn-primary">+Add Product</a>
</div>
 
@if ($brand === 'all' && $package === 'all')
    <p>Show all product</p>
@elseif ($brand !== 'all' && $package !== 'all')
    <p>Showing products brand: {{$brand}} with package {{ $package }}</p>
@elseif($brand !== 'all')
<p>Showing products brand: {{$brand}}</p>
@elseif ($package !== 'all')
<p>Showing products package:{{ $package}}</p>
@endif
 

<nav>
    <h3>SHOW BY BRAND</h3>
        <a href="{{ route('products.index') }}">ALL</a> |
        <a href="{{ route('products.index',['brand'=> 'sunsilk'])}}">SUNSILK</a> |
        <a href="{{ route('products.index',['brand' => 'choco']) }}">CHOCO</a> |
        <a href="{{ route('products.index',['brand'=> 'dishwashing' ]) }}">DISWASHING</a>
        <a href="{{ route('products.index',['brand' => 'nescafe' ]) }}">NESCAFE</a>
        <a href="{{ route('products.index',['brand' => 'mint']) }}">MINT</a>
</nav>

<nav>
   <h3>SHOW BY PACKAGE</h3>
        <a href="{{ route('products.index') }}">ALL</a> |
        <a href="{{ route('products.index',['package' => 'bottle' ]) }}">BOTTLED</a> |
        <a href="{{ route('products.index',['package' => 'plastic' ]) }}">PLASTIC</a> |
        <a href="{{ route('products.index',['package' => 'pack' ]) }}">PACK</a> |
        <a href="{{ route('products.index',['package' => 'sachet' ]) }}">SACHET</a> |
        <a href="{{ route('products.index',['package' => 'stick' ]) }}">STICK</a> |
</nav>


    <table class="table table-borderd table-striped" border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Brand</th>
            <th>Package</th>
        </tr>
 
        @foreach ($products as $product)
            <tr>
                <td><a href="{{ route('products.show', $product['id'])}}"> {{ $product['name']}}</a></td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['stock'] }}</td>
                <td>{{ $product['brand'] }}</td>
                <td>{{ $product['package'] }}</td>
                
            </tr>
        @endforeach
    </table>

@endsection


