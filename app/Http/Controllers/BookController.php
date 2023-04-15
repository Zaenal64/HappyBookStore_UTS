<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookDetail($id){
        $categ = Category::all();
        $books = Book::find($id);
        return view('bookDetail')->with('book', $books)->with('categ', $categ);
    }
}
