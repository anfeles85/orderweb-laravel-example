<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Technician;
use App\Models\TypeActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    private $rules = [
        'description' => 'required|string|max:100|min:3',
        'hours' => 'required|numeric|max:9999999999|min:1',
        'technician_id' => 'required|numeric|max:99999999999999999999',
        'type_id' => 'required|numeric|max:99999999999999999999'
    ];

    private $traductionAttributes = array(
        'description' => 'descripción',
        'hours' => 'horas',
        'technician_id' => 'técnico',
        'type_id' => 'tipo' 
    );

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        //$activities = Activity::with(['technician', 'type_activity'])->get();
        return view('activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technicians = Technician::all();
        $types = TypeActivity::all();
        return view('activity.create', compact('technicians', 'types'));
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
            return redirect()->route('activity.create')->withInput()->withErrors($errors);
        }

        $activity = Activity::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('activity.index');
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
        $activity = Activity::find($id);
        if($activity) 
        {
            $technicians = Technician::all();
            $types = TypeActivity::all();
            return view('activity.edit', compact('activity','technicians', 'types'));
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
            return redirect()->route('activity.index');
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
            return redirect()->route('activity.edit', $id)->withInput()->withErrors($errors);
        }
        
        $activity = Activity::find($id);
        if($activity) 
        {
            $activity->update($request->all());
            session()->flash('message', 'Registro actualizado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
        }
        
        return redirect()->route('activity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::find($id);
        if($activity) 
        {
            $activity->delete();
            session()->flash('message', 'Registro eliminado exitosamente');
        }
        else
        {
            session()->flash('warning', 'No se encuentra el registro solicitado');
        }
        
        return redirect()->route('activity.index');
    }
}
