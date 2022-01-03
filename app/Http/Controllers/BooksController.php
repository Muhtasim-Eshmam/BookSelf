<?php

namespace App\Http\Controllers;

use App\books;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;
class BooksController extends Controller
{
   
    public function index()
    {
        return view("adminpanel.addbooks");
    }

    public function create()
    {
        
    }

   
    public function store(Request $request)
  {

    $books = new books();
    $books->bookname = $request->bookname;
    $books->author = $request->author;
    $books->price = $request->price;
    $books->type = $request->type;



    if($request->hasFile('image'))
    {
        $path = $request->file('image')->store('CourseImage');
        $books->image_path = 'storage/'.$path;
    }
     
    $books->save();

    return redirect()->route('booklist', $books);
   
  

    
}

   
    public function show(books $books)
    {
        $books = books::orderBy('bookname')->get();
        return view('adminpanel.test', compact('books'));
    }

  
    public function edit(books $books)
    {
        //
    }

  
    public function update(Request $request, books $books)
    {
        //
    }

   
    public function destroy(books $books)
    {
        //
    }
}
