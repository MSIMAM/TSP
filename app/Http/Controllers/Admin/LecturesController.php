<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Models\User;
use App\Models\Lecture;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alaouy\Youtube\Facades\Youtube;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\lectureRequest;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videoLists = Youtube::listChannelVideos('UC50Cr5GFxVg8dRYD-8i12mQ', 50);
        // $lectures =  DB::table('lectures')
        //                 ->join('users', 'lectures.user_uuid', "=", 'users.uuid')
        //                 ->paginate(4);
                        return view('Admin.Lectures.index', compact('videoLists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.Lectures.create');
    }

    public function listChannelVideos($channelId, $maxResults = 10, $order = null, $part = ['id', 'snippet'], $pageInfo = false)
    {
        $params = array(
            'type' => 'video',
            'channelId' => $channelId,
            'part' => implode(', ', $part),
            'maxResults' => $maxResults,
        );
        if (!empty($order)) {
            $params['order'] = $order;
        }
        return $this->searchAdvanced($params, $pageInfo);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(lectureRequest $request)
    {
        Lecture::create([
            'uuid' => Str::orderedUuid(),
            'user_uuid' => Auth::user()->uuid,
            'title' => $request->title,
            'video' => $request->file('video')->store('public/storage/videos'),
        ]);
        return view('Admin.Lectures.index')->with('message', 'Uploaded Successfully');
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
