<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    /**
     * reporte que genera el listado de todos los técnicos
     */
    public function export_technicians()
    {
        $technicians = Technician::all();
        $data = array(
            'technicians' => $technicians
        );

        $pdf = Pdf::loadView('reports.export_technicians', $data)
                ->setPaper('letter', 'portrait'); //landscape: horizontal
        return $pdf->download('technicians.pdf');        
    }
}
