<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function settings()
    {
        return view('books.settings');
    }

    public function addBook()
    {
        return view('books.books.add');
    }

    public function editBook($id)
    {
        return view('books.books.edit');
    }

    public function listBook()
    {
        return view('books.books.list');
    }

    public function viewBook($id)
    {
        return view('books.books.view')->with('id', $id);
    }

    public function provideBook()
    {
        return view('books.activities.provide');
    }

    public function returnBook(Request $request)
    {
        return view('books.activities.return');
    }

    public function returnBookList(Request $request)
    {
        return view('books.activities.return_book_list');
    }

    public function todayList()
    {
        return view('books.activities.today_list');
    }
}
