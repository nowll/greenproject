<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Requests\CreateDiscussionRequest;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscussionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(){
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function index(){
        return view('discussions.index', [
            'discussions' => Discussion::filterbyChannels()->paginate(10),
            'channels' => \App\Models\Channel::all(),
        ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('discussions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(CreateDiscussionRequest $request)
{

    auth()->user()->discussions()->create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'contents' => $request->contents,
        'channel_id' => $request->channel_id,
//-
    ]);

    session()->flash('success','Discussion created');

    return redirect()->route('discussions.index');
}

    /**
     * Display the specified resource.
     */
    public function show(Discussion $discussion)
    {
        //
        return view('discussions.show',[
            'discussion' => $discussion
        ]);
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
