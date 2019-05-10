<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    
use App\Notebook;

class NotebooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notebooks = Notebook::all();
        //return $notebooks;
        return view('notebook.notebooks', compact('notebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notebook.create'); //, compact('notebooks'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        Notebook::create($data);
        return redirect('/notebook');
        
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
        $notebook = Notebook::where('id',$id) -> first();
        //return $notebook;
        return view('notebook.edit') -> with('notebook',$notebook);
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
        $notebook = Notebook::where('id', $id) -> first();
        $notebook -> update($request -> all());
        return redirect('/notebook');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notebook = Notebook::where('id', $id) -> first();
        $notebook -> delete();
        return redirect('/notebook');
        
    }
}
