@extends('...main')

@section('title', 'This is a new page!')

@section('content')
    <table>
       <tr>
           <th>No</th>
           <th>Name</th>
           <th>Price</th>
           <th>Category</th>
           <th>Description</th>
       </tr>
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->description }}</td>
            </tr>

    </table>
@stop
