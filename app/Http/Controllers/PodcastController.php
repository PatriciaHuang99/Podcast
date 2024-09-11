<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePodcastRequest;
use App\Models\Podcast;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Group by popularity, second group is for popular podcasts
        // avoid n+1 issue
        $podcasts = Podcast::latest()->with(['creator', 'tags'])->get()->groupBy('popular');

        return view('podcasts.index', [
            'popularPodcasts' => $podcasts[1],
            'podcasts' => $podcasts[0],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('podcasts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'episode' => ['required'],
            'audio_file_path' => ['required', 'url'],
            'tags' => ['nullable']
        ]);

        $podcast = Auth::user()->creator->podcasts()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $podcast->tag($tag);
            }
        }

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Podcast $podcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePodcastRequest $request, Podcast $podcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Podcast $podcast)
    {
        //
    }
}
