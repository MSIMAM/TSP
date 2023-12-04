<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\DB;
use Alaouy\Youtube\Facades\Youtube;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


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

        $videoLists = Youtube::listChannelVideos('UC50Cr5GFxVg8dRYD-8i12mQ', 50);
        return view('pages.lectures', compact('videoLists'));


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

    public function download(Lecture $lecture)
    {
        // return 'ddd';
        // return response()->download(public_path('/storage/videos/'.$lecture));
    }

    public function getSearch(Request $request)
    {
        return $request;
        // $search = ($request->search != null) ? $request->search : null;
        // $searchs = Lecture::select('video')->when($search ?? null, function($query, $search){
        //     $query->where('title', 'like', '%'. $search . '%');
        // })->get();

        //     return view('pages.search', [
        //         'results' => $searchs
        //     ]);


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
