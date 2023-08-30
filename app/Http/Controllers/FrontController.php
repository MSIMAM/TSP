<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.siditidjanihistory');
    }

    public function home()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function lectures()
    {
        $lectures =  DB::table('lectures')
        ->join('users', 'lectures.user_uuid', "=", 'users.uuid')
        ->paginate(4);

        return view('pages.lectures', compact('lectures'));
    }

    public function getAudios()
    {
        $audios = DB::table('audio')
                    ->join('schollars', 'audio.schollar_uuid', 'schollars.uuid')
                    ->join('programes', 'audio.programe_uuid', 'programes.uuid')
                    ->get();
        return view('pages.audios', [
            'audios' => $audios
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function tidjaniya()
    {
        //
        return view('pages.tidjaniya');
    }

    /**
     * Display lineage resource.
     */
    public function lineage()
    {
        return view('pages.lineage');
    }

    /**
     * Show the faydha  history resource.
     */
    public function faydha()
    {
        //
        return view('pages.faydha');
    }

    public function downloadLecture(Lecture $lecture)
    {
        return $lecture;
        // $file = File::file_put_contents($lecture);

        // return response()->download(asset($file->path), $file->filename);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
