<?php

namespace App\Http\Controllers;

use App\Models\Causal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CausalController extends Controller
{
    private $rules = [
        'description' => 'required|string|max:50|min:3',        
    ];

    private $traductionAttributes = array(
        'description' => 'descripción',
    );
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $causals = Causal::all();
        return view('causal.index', compact('causals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('causal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if ($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('causal.create')->withInput()->withErrors($errors);
        }
        
        $causal = Causal::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('causal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $causal = Causal::find($id);
        if($causal) //la causal existe
        {
            return view('causal.edit', compact('causal'));
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
            return redirect()->route('causal.index');
        }        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if ($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('causal.edit', $id)->withInput()->withErrors($errors);
        }
        
        $causal = Causal::find($id);
        if($causal) //la causal existe
        {
            $causal->update($request->all());
            session()->flash('message', 'Registro actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
        }
        
        return redirect()->route('causal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $causal = Causal::find($id);
        if($causal) //la causal existe
        {
            $causal->delete();
            session()->flash('message', 'Registro eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');            
        } 

        return redirect()->route('causal.index');
    }
}
