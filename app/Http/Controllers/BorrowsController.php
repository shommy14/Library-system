<?php

namespace App\Http\Controllers;

use App\Borrow;
use Illuminate\Http\Request;


class BorrowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrowedBooks = Borrow::with('member','book')->get();
        return view('borrow.index')->with('borrowedBooks', $borrowedBooks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('borrow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
               'issueDate' => 'required',
               'dueDate' => 'required',
               'bookId' => 'required',
               'userId' => 'required',
                'returned' => 'required'
        ]);
        Borrow::create($request->all());
        return redirect()->route('borrow.index')->with('success', 'Book borrowed, success!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $borrow = Borrow::find($id);
        return view('borrow.edit',compact('borrow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'issueDate' => 'required',
            'dueDate' => 'required',
            'bookId' => 'required',
            'userId' => 'required',
            'returned' => 'required'
        ]);
        Borrow::find($id)->update($request->all());
        return redirect()->route('borrow.index')->with('success','Book returned, success');
    }
}
