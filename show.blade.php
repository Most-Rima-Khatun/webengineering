@extends('books.layout')

@section('content')
<table class="table table-stripped table-bootstrap">
    <tr>
        <th>ID</th>
        <td>{{$books->id}}</td>
    </tr>
    <tr>
        <th>Title</th>
        <td>{{ $books->title }}</td>
    </tr>
    <tr>
        <th>Author</th>
        <td>{{ $books->author }}</td>
    </tr>
    <tr>
        <th>ISBN</th>
        <td>{{ $books->isbn }}</td>
    </tr>
    <tr>
        <th>Stock</th>
        <td>{{ $books->stock }}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{ $books->price }}</td>
    </tr>
        
</table>
<p>
    <a class="btn btn-success" href="{{ route('books.index') }}">Go Back</a>
</p>
@endsection
        <a class="btn-success" href="dangere('books.index') }}">Go edit/,$books->id a>
Edit