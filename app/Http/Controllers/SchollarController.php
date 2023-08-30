<?php

namespace App\Http\Controllers;

use App\Models\Schollar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SchollarStoreRequest;

class SchollarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $schollars = DB::table('schollars')->get();
        return view('Admin.Schollars.index', [
            'schollars' => $schollars
        ]);
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
    public function store(SchollarStoreRequest $request)
    {
        Schollar::create([
            'uuid' => Str::orderedUuid(),
            'schollar_name' => $request->schollar_name
        ]);
        toast('Schollar Created', 'success');
        return to_route('schollar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schollar $schollar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schollar $schollar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schollar $schollar)
    {
        //
        Schollar::where('uuid', $request->uuid)->update([
            'schollar_name' => $request->schollar_name
        ]);

        toast('Schollar updated', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Schollar $schollar)
    {
        // $schollar->first();
        Schollar::where('id', $schollar->id)->delete();
        return redirect()->back();
    }
}
