<?php

namespace App\Http\Controllers;
use App\Rayon;

use Illuminate\Http\Request;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rayons = Rayon::latest()->paginate(5);

        return view('rayons.index',compact('rayons'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rayons.create');
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
            'rayonid' => 'required',
            'rayon' => 'required',
        ]);
  
        Rayon::create($request->all());
   
        return redirect()->route('rayons.index')
                        ->with('success','Rayon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function show(Rayon $Rayon)
    {
       return view('rayons.show',compact('Rayon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Rayon $Rayon)
    {
        return view('rayons.edit',compact('Rayon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rayon $rayon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rayon $Rayon)
    {
        $request->validate([
            'rayonid' => 'required',
            'rayon' => 'required',
        ]);
  
        $Rayon->update($request->all());
  
        return redirect()->route('rayons.index')
                        ->with('success','Rayon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rayon $rayon)
    {
       
        $rayon->delete();
  
        return redirect()->route('rayons.index')
                        ->with('success','Rayon deleted successfully');
    }
}
