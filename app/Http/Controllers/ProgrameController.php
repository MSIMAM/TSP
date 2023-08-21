<?php

namespace App\Http\Controllers;

use App\Models\Programe;
use App\Models\Schollar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProgrammesStoreRequest;

class ProgrameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $schollars = DB::table('schollars')->get();
        // $programes = Programe::with('schollar')->get();
        $programes = DB::table('programes')->join('schollars', 'programes.schollar_uuid', '=', 'schollars.uuid')->get();
        return view('Admin.Programmes.index', compact('schollars', 'programes'));
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
    public function store(ProgrammesStoreRequest $request)
    {
        Programe::create([
            'uuid'              => Str::orderedUuid(),
            'schollar_uuid'     => $request->schollar_uuid,
            'name'              => $request->name,
        ]);
        toast('Programme Created', 'success');
        return to_route('programe.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Programe $programe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programe $programe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programe $programe)
    {
        //
        Programe::where('uuid', $request->uuid)->update([
            'name' => $request->name,
            'schollar_uuid'=>$request->schollar_uuid
        ]);
        toast('Programe updated', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programe $programe)
    {
        return $programe;
        $programe->delete();
        return redirect()->back();

    }
}
