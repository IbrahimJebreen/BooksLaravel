<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allBooks = books::all();
        return view('Books', ['allBook' => $allBooks]);
    }

    public function AddBook()
    {
        return view('AddBook');
    }

    public function delete($id)
    {
        $book = books::find($id);
                $book->delete();
                return redirect('books');
    }

    public function showData($id)
    {
        $data = books::find($id);
        return view('edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        
        $data= books::find($request->id);
        $data->Book_Title = $request->title;
        $data->Book_Description = $request->desc;
        $data->Book_Author = $request->author;
        $data->img = $request->img;
        $data->save();
        return redirect('books');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $addDB = new books();
        $addDB->Book_Title = $request->title;
        $addDB->Book_Description = $request->desc;
        $addDB->Book_Author = $request->author;
        $addDB->img = $request->img;
        $addDB->save();
        return redirect('books');
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
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

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
}
