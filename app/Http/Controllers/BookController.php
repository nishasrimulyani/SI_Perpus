<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $data['books'] = Book::with('bookshelves')->get();
        return view('books.index', $data);
    }
}
