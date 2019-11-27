<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $borrowedBooks = Borrow::all();
        return view('home')->with(['borrowedBooks'=> $borrowedBooks,
                                        'user' => $user]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booksAvailable()
    {
        $books = Book::all();
        return view('books.user.index')->with('books', $books);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('books.user.show',compact('book'));
    }
}
