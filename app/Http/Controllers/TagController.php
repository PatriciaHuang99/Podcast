<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('results', ['podcasts' => $tag->podcasts]);
    }
}
