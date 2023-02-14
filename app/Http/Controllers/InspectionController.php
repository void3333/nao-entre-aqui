<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia(
            'Inspection/Index',
            [
                'inspections' => Inspection::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Inspection/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inspection::create(
            $request->validate([
                'serviceOrder' => 'required|integer',
                'certificate' => 'required|integer',
                'scope' => 'required',
                'container' => 'required',
                'status' => 'required',
                'inspector' => 'required',
                'staff' => 'required',
                'date' => 'required',
                'location' => 'required',
                'destination' => 'required',
                'order' => 'required',
                'contract' => 'required',
                'nomination' => 'required',
                'exporter' => 'required',
                'importer' => 'required',
                'productQty' => 'required',
                'generalProduct' => 'required',
                'netW' => 'required',
                'grossW' => 'required',
            ])
        );

        return redirect()->route('inspection.index')
            ->with('success', 'Inspeção registrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inspection $inspection)
    {
        return inertia(
            'Inspection/Show',
            [
                'inspection' => $inspection
            ]  
        );
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspection $inspection)
    {
        return inertia(
            'Inspection/Edit',
            [
                'inspection' => $inspection
            ]
        ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspection $inspection)
    {
        $inspection->update(
            $request->validate([
                'serviceOrder' => 'required|integer',
                'certificate' => 'required|integer',
                'scope' => 'required',
                'container' => 'required',
                'status' => 'required',
                'inspector' => 'required',
                'staff' => 'required',
                'date' => 'required',
                'location' => 'required',
                'destination' => 'required',
                'order' => 'required',
                'contract' => 'required',
                'nomination' => 'required',
                'exporter' => 'required',
                'importer' => 'required',
                'productQty' => 'required',
                'generalProduct' => 'required',
                'netW' => 'required',
                'grossW' => 'required',
            ])
        );

        return redirect()->route('inspection.index')
        ->with('success', 'Inspeção atualizada!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspection $inspection)
    {
        $inspection->delete();
        
        return redirect()->back()
        ->with('success', 'Programação deletada!');
    }
}
