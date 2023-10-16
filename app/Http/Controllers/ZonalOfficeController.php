<?php

namespace App\Http\Controllers;

use App\Models\ZonalOffice;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ZonalOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zonalOffices = ZonalOffice::paginate(5);
        return Inertia::render('ZonalOffice/ZonalOfficeIndex',['zonalOffice'=>$zonalOffices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ZonalOffice $zonalOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ZonalOffice $zonalOffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ZonalOffice $zonalOffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ZonalOffice $zonalOffice)
    {
        //
    }
}
