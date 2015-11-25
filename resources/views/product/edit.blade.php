@extends('...main')

@section('title', 'This is a new page!')

@section('content')
    <form action="/product/save/{{ $product->id or '' }}">
        ID:{{ $product->id }} <br>
        Name:<input name="name" value="{{ $product->name }}" /><br>
        Price:<input name="price" value="{{ $product->price }}" /><br>
        Category:<input name="category" value="{{ $product->category }}" /><br>
        Description:<input name="description" value="{{ $product->description }}" /><br>
        <input type="submit" value="保存"/>
    </form>

@stop
