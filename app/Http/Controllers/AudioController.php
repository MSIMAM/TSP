<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Audio;
use App\Models\Programe;
use App\Models\Schollar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $audios = DB::table('audio')
                    ->Join('schollars', 'audio.schollar_uuid', 'schollars.uuid')
                    ->join('programes', 'audio.programe_uuid', 'programes.uuid')
                    ->get();
        return view('Admin.Audios.index', [
            'audios' => $audios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $programes = Programe::all();
        $schollars = Schollar::all();
        return view('Admin.Audios.create', compact('programes', 'schollars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        Audio::create([
            'uuid' => Str::orderedUuid(),
            'schollar_uuid' => $request->schollar_uuid,
            'programe_uuid' => $request->programe_uuid,
            'audio' => $request->file('audio')->store('public/storage/audios')
        ]);

        return to_route('audios.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(Audio $audio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Audio $audio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Audio $audio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Audio $audio)
    {
        //
    }
}
