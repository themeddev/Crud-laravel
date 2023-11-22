<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Anounce;



class AnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $message = $request->session()->get('success');
        $anounces = Anounce::all();
        return view('anounces.index', compact('anounces','message'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        
        return view('anounces.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|max:100',
            'description' => 'required',
            'type' => 'required',
            'ville' => 'required',
            'superficie' => 'required|numeric', // Ensure 'superficie' is numeric
            'neuf' => 'required|boolean', // Ensure 'neuf' is boolean
            'prix' => 'required|numeric', // Ensure 'prix' is numeric
        ]);
    
        Anounce::create([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'ville' => $request->input('ville'),
            'superficie' => $request->input('superficie'),
            'neuf' => $request->input('neuf'),
            'prix' => $request->input('prix'),
        ]);
    
        return redirect()->route('anounces.index')->with('action', 'created')->with('created', 'Post created successfully.');
    }
    public function confirme($id)
    {
        $anounce = Anounce::find($id);

        return view('anounces.confirme', compact('anounce'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anounce = Anounce::find($id);

        return view('anounces.show', compact('anounce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' => 'required|max:100',
            'description' => 'required',
            'type' => 'required',
            'ville' => 'required',
            'superficie' => 'required|numeric', // Ensure 'superficie' is numeric
            'neuf' => 'required|boolean', // Ensure 'neuf' is boolean
            'prix' => 'required|numeric',
        ]);
        $anounce = Anounce::find($id);

        if (!$anounce) {
            return redirect()->route('anounces.index')->with('error', 'Post not found.');
        }
    
        $anounce->update($request->all());
    
        return redirect()->route('anounces.index')->with('action', 'updated')->with('updated', 'Post updated successfully.');
    }


    public function edit($id)
    {
        $anounce = Anounce::find($id);

        return view('anounces.edit', compact('anounce'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anounce = Anounce::find($id);
    
        if (!$anounce) {
            return redirect()->route('anounces.index')->with('error', 'Post not found.');
        }
    
        $anounce->delete();
    
        return redirect()->route('anounces.index')->with('action', 'deleted')->with('deleted', 'Post has been deleted.');
    }


}
