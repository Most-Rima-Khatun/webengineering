@extends('books.layout')

@section('content')
    <h1>Edit Book</h1>
    <br>

    <form action="{{ route('books.update', $books->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $books->id }}">

        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ old('title', $books->title) }}" required>
            <div class="text-danger">{{ $errors->first('title') }}</div>
        </div>

        <div class="form-group">
            <label>Author</label>
            <input type="text" class="form-control" name="author" value="{{ old('author', $books->author) }}" required>
            <div class="text-danger">{{ $errors->first('author') }}</div>
        </div>

        <div class="form-group">
            <label>ISBN</label>
            <input type="text" class="form-control" name="isbn" value="{{ old('isbn', $books->isbn) }}" required>
            <div class="text-danger">{{ $errors->first('isbn') }}</div>
        </div>

        <div class="form-group">
            <label>Stock</label>
            <input type="number" class="form-control" name="stock" value="{{ old('stock', $books->stock) }}" required>
            <div class="text-danger">{{ $errors->first('stock') }}</div>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" step="0.01" name="price" value="{{ old('price', $books->price) }}" required>
            <div class="text-danger">{{ $errors->first('price') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('books.index') }}" class="btn btn-danger">Back</a>
    </form>
@endsection
