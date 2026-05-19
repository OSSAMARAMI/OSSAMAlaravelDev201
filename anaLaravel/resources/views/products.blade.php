@extends('Home')
@section('title','Products')
@section('content')
<h1>Products</h1>
 <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        @foreach($productlist as $product)
        <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection