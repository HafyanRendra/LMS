<?php

namespace App\Http\Controllers;
use App\Models\Book;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $books;

    public function __construct()
    {
        
    }

    
    public function index()
    {
        $pageTitle = 'Book List';
        $books = Book::all();
        return view('books.index', ['pageTitle' => $pageTitle,'books' => $books]);
    }

    public function create(){
        $pageTitle = 'New Book';
        $books = $this->books;
        return view('Books.create', ['pageTitle' => $pageTitle, 'books'=>$books]);
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Book';
        $books = Book::find($id);

        return view('books.edit', ['pageTitle' => $pageTitle, 'books' => $books]);
    }

    

}
