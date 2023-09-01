<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Models\User;
use App\Models\Lecture;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $lectures = Lecture::with('user')
                            //->get()
                            //->paginate(4);

        $lectures =  DB::table('lectures')
         ->join('users', 'lectures.user_uuid', "=", 'users.uuid')
        ->paginate(4);

        return view('Admin.Lectures.index', compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.Lectures.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

         $request->validate([
            // 'uuid' => Str::orderedUuid(),
            'title' => 'required|max:20',
            'video' => 'required',
        ]);



        Lecture::create([
            'uuid' => Str::orderedUuid(),
            'user_uuid' => Auth::user()->uuid,
            'title' => $request->title,
            'video' => $request->file('video')->store('public/storage/videos'),
        ]);
        // toast('Upload Success', 'success');
        return redirect()->back()->with('message', 'Uploaded Successfully');

        // return $request;
    }

    public function search(Request $request)
    {
        $search = ($request->search != null) ? $request->search : null;
        $searchs = Lecture::select('video')->when($search ?? null, function($query, $search){
            $query->where('title', 'like', '%'. $search . '%');
        })->get();

            return view('Admin.Lectures.search', [
                'results' => $searchs
            ]);


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
        //
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
