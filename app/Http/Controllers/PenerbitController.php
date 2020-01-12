<?php

namespace App\Http\Controllers;
use App\Penerbit;

use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbits = Penerbit::latest()->paginate(5);

        return view('penerbits.index',compact('penerbits'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'penerbitid' => 'required',
            'penerbit' => 'required',
        ]);
  
        Penerbit::create($request->all());
   
        return redirect()->route('penerbits.index')
                        ->with('success','Penerbit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show(Penerbit $Penerbit)
    {
       return view('penerbits.show',compact('Penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerbit $Penerbit)
    {
        return view('penerbits.edit',compact('Penerbit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerbit $Penerbit)
    {
        $request->validate([
            'penerbitid' => 'required',
            'penerbit' => 'required',
        ]);
  
        $Penerbit->update($request->all());
  
        return redirect()->route('penerbits.index')
                        ->with('success','Penerbit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerbit $penerbit)
    {
       
        $penerbit->delete();
  
        return redirect()->route('penerbits.index')
                        ->with('success','Penerbit deleted successfully');
    }
}
