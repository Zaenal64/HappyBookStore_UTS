<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $categ = Category::all();
        $books = Book::paginate(10);

        return view('home',['categ' => $categ, 'books' => $books]);
    }
}

