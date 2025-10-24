<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index')->with('books',$books);
    }

    public function show($id)
    {
        $books = Book::findOrFail($id);
        return view('books.show')->with('books', $books);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|digits:13',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
        ];

        $request->validate($rules);

        $data = $request->only(['title', 'author', 'isbn', 'stock', 'price']);
        $books = Book::create($data);

        return redirect()
            ->route('books.show', $books->id);
    }

    public function edit($id)
    {
        $books = Book::findOrFail($id);
        return view('books.edit')->with('books', $books);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|digits:13',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
        ];

        $request->validate($rules);
        $books = Book::find($id);

        $data = $request->only(['title', 'author', 'isbn', 'stock', 'price']);
        $books->update($data);
        return redirect()
            ->route('books.show', $books->id);

    }

    public function destroy(Request $request, $id){
        $books = Book::find($request->id);
        $books->delete();
        return redirect()
            ->route('books.index')->with('books',$books);
    }
}
