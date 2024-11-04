<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Batches;
use App\Models\Course;
use Illuminate\View\View;

class BatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $batches = Batches::all();
        return view('batches.index')->with('batches',$batches);
    }

    /**
     * 
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        // $couses = Course::pluck('name','id');
        // return view('batches.create', compact('$couses') );

        $courses = Course::pluck('name', 'id');
        return view('batches.create', compact ('courses')) ;

       
       // return view('batches.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batches::create($input);
        return redirect('batches')->with('flash_message', 'Batches Addedd!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $batches = Batches::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches = Batches::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batches = Batches::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'batches Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
     
     public function destroy(string $id): RedirectResponse
     {
        Batches::destroy($id);
         return redirect('batches')->with('flash_message', 'Batches deleted!'); 
     }
}
