<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $podcasts = Podcast::where('title', 'Like', '%'.request('q').'%')->get();

        return view('results', ['podcasts' => $podcasts]);
    }
}
