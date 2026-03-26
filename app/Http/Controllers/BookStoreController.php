<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookStore;
class BookStoreController extends Controller
{
  //display
    public function index()
    
    {
        $bookstore = BookStore::all();
        return view ('books.index', ['items' => $bookstore]);
    }
    //insert
    public function store(Request $request)
    {
       BookStore::create([
        'book_name' => $request->book_name,
        'book_author' => $request->book_author,
        'book_stock' => $request->book_stock,
        'book_date' => $request->book_date
       ]);

    return redirect('/books');
    }
    //update
    public function edit ($id)
    {
        $bookstore = BookStore::findOrFail($id);
        return view ('books.edit',[
            'item' => $bookstore
        ]);
    }

    public function update(Request $request, $id)
    {
        $bookstore = BookStore::findOrFail($id);
        
        $bookstore->update([
            'book_name' => $request->book_name,
            'book_author' => $request->book_author,
            'book_stock' => $request->book_stock,
            'book_date' => $request->book_date
        ]) ; 
        return redirect('/books');
    }

    public function destroy($id)
    {
        $bookstore = BookStore::findOrFail($id);
        $bookstore->delete(); 
        
        return redirect('/books');
}
}