<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $books;

    public function __construct()
    {
        $this->books = [
            (object) [
                'id' => 1,
                'category' => 'IT Programming',
                'isbn' => '001',
                'title' => 'Belajar lavarel untuk pemula',
                'author' => 'Rendra',
                'publisher'=>'Progate',
                'status' =>'Available'
            ],
            (object) [
                'id' => 2,
                'category' => 'Politics',
                'isbn' => '110',
                'title' => 'Pemilu 2024',
                'author' => 'Prof. Tarjono',
                'publisher'=>'Gramedia',
                'status' =>'Borrowed'
            ],
            (object) [
                'id' => 3,
                'category' => 'Engineering',
                'isbn' => '220',
                'title' => 'Software Engineering',
                'author' => 'Prof. Uding',
                'publisher'=>'Pustaka',
                'status' =>'Available'
            ],
            (object) [
                'id' => 4,
                'category' => 'Science and Technology',
                'isbn' => '330',
                'title' => 'A complex of life',
                'author' => 'Prof. Marco',
                'publisher'=>'Tiga serangkai',
                'status' =>'Available'
            ],
            (object) [
                'id' => 5,
                'category' => 'IT programming',
                'isbn' => '009',
                'title' => 'Belajar PhP bagi pemula',
                'author' => 'Prof. Yono',
                'publisher'=>'Elsevier',
                'status' =>'Borrowed'
            ],
            (object) [
                'id' => 6,
                'category' => 'Engineering',
                'isbn' => '229',
                'title' => 'Coding handbook',
                'author' => 'Prof. Jono',
                'publisher'=>'Gramedia',
                'status' =>'Borrowed'
            ],
        ];
    }

    public function index()
    {
        $pageTitle = 'Book List';
        $books = $this->books;
        return view('books.index', ['pageTitle' => $pageTitle,'books' => $books]);
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Book';
        $books = $this->books;

        $book = $books[$id - 1];

        return view('books.edit', ['pageTitle' => $pageTitle, 'book' => $book]);
    }
}
