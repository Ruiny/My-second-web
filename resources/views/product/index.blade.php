@extends('...main')

@section('title', 'This is a new page!')

@section('content')
    <table>
       <tr>
           <th>No</th>
           <th>Name</th>
           <th>Price</th>
           <th>Operation</th>
       </tr>
        @foreach($products as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->price }}</td>
                <td><a href="/product/show/{{ $p->id }}">Show</a>
                    <a href="/product/edit/{{ $p->id }}">Edit</a>
                    <a href="/product/delete/{{ $p->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/product/edit/">Create</a>
@stop
