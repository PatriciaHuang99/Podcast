<?php

namespace App\Http\Controllers;

use App\Models\Podcast;

class SearchController extends Controller
{
    public function __invoke()
    {
        $podcasts = Podcast::query()
            ->with(['creator', 'tags'])
            ->where('title', 'Like', '%'.request('q').'%')
            ->get();

        return view('results', ['podcasts' => $podcasts]);
    }
}
