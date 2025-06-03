<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TechnicianController extends Controller
{
    private $rules = [        
        'name' => 'required|string|min:3|max:80',
        'speciality' => 'max:50',
        'phone' => 'max:30'
    ];

    private $traductionAttributes = [
        'document' => 'documento',
        'name' => 'nombre',
        'speciality' => 'especialidad',
        'phone' => 'teléfono' 
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technicians = Technician::all();
        return view('technician.index', compact('technicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('technician.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->rules['document'] = 'required|numeric|unique:technician|min:3|max:99999999999999999999';
        $validator =  Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('technician.create')
                            ->withInput()->withErrors($errors);
        }
        
        $technician = Technician::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('technician.index');
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
        $technician = Technician::find($id);
        if($technician) 
        {
            return view('technician.edit', compact('technician'));
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
            return redirect()->route('technician.index');
        }  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->rules['document'] = 'required|numeric|unique:technician,document,'.$id.'|min:3|max:99999999999999999999';
        $validator =  Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        if($validator->fails())
        {
            $errors = $validator->errors();
            return redirect()->route('technician.edit', $id)
                            ->withInput()->withErrors($errors);
        }
        
        $technician = Technician::find($id);
        if($technician) 
        {
            $technician->update($request->all());
            session()->flash('message', 'Registro actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');            
        } 

        return redirect()->route('technician.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $technician = Technician::find($id);
        if($technician) 
        {
            $technician->delete();
            session()->flash('message', 'Registro eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');            
        } 

        return redirect()->route('technician.index');
    }
}
