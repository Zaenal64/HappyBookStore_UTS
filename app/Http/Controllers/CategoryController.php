<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categ($id){
        $categ = Category::all();
        $books = Book::where('category_id', '=', $id)->paginate(10);
        $c = Category::find($id);

        return view('categ',['categ' => $categ, 'books' => $books, 'c' => $c]);
    }
}
