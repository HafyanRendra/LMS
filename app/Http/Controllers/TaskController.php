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

    public function store(Request $request)
    {
        $request->validate(
            [
            'isbn'=>'required',
            'title'=>'required',
            'author'=>'required',
            'publisher'=>'required',
            'status'=>'required',
            ],
            $request->all()
        );

        Book::create([
            'category'=>$request->category,
            'isbn'=>$request->isbn,
            'title'=>$request->title,
            'author'=>$request->author,
            'publisher'=>$request->publisher,
            'status'=>$request->status,
        ]);
        return redirect()->route('books.index');

    }

    public function edit($id)
    {
        $pageTitle = 'Edit Book';
        $books = Book::find($id);

        return view('books.edit', ['pageTitle' => $pageTitle, 'books' => $books]);
    }

    public function update(Request $request, $id)
    {
       // dd($request->all());
        $Books = Book::find($id);
        $Books->update([
            'category'=>$request->category,
            'isbn'=>$request->isbn,
            'title'=>$request->title,
            'author'=>$request->author,
            'publisher'=>$request->publisher,
            'status'=>$request->status,
        ]);
        return redirect()->route('books.index');
    }

    public function delete($id)
    {
    $pageTitle = 'Delete Task'; // Menyebutkan judul dari halaman yaitu "Delete Task"
    $books = Book::find($id); //  Memperoleh data task menggunakan $id
    return view('books.delete', ['pageTitle' => $pageTitle, 'books' => $books]);// Menghasilkan nilai return berupa file view dengan halaman dan data task di atas 
    }

    public function destroy($id)
    {
    $books = Book::find($id);// Memperoleh task tertentu menggunakan $id
    $books->delete();
    return redirect()->route('books.index');// Melakukan redirect menuju tasks.index
    }

}
