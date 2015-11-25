@extends('main')

@section('title', 'This is a new page!')

@section('content')
    <table>
       <tr>
           <th>No</th>
           <th>Name</th>
           <th>Price</th>
       </tr>
        @for ($i = 0; $i < count($product); $i++)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $product[$i] }}</td>
                <td>{{ $price[$i] }}</td>
            </tr>
        @endfor
    </table>
@stop
