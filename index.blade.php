@extends('books.layout')

@section(section: 'content')
<h1>Welcome To Bookstore</h1>
<br>
<p>
    <a href="{{ route('books.create') }}">Add Book</a>
</p>
 <table class="table table-stripped table-bootstrap" >
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>
                <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form method="post" action="{{ route('books.destroy', $book->id) }}" onsubmit="return confirm('Are you sure you want to delete this book?')" style="display: inline;">
                    @csrf
                    @method('DELETE')
                     <input type="hidden" name="id" value="{{ $book->id }}">
                    <button type="submit" class="btn btn-link text-danger">Delete</button>
                </form>
            </td>
        </tr>
        
        @endforeach
    </table>
    <div>
        {{ $books->links() }}
    </div>
    

@endsection
   