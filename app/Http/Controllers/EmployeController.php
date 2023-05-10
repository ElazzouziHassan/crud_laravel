<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
 

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::all();
        return view ('employes.index')->with('employes', $employes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Employe::create($input);
        return redirect('employe')->with('flash_message', 'Employe Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employe = Employe::find($id);
        return view('employes.show')->with('employes', $employe);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employe = Employe::find($id);
        return view('employes.edit')->with('employes', $employe);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employe = Employe::find($id);
        $input = $request->all();
        $employe->update($input);
        return redirect('employe')->with('flash_message', 'employe Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employe::destroy($id);
        return redirect('employe')->with('flash_message', 'Employe deleted!');
    }
}
