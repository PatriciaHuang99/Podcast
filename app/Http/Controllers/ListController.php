<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function __invoke()
    {
        $creatorId = Auth::user()->creator->id;
        $podcasts = Podcast::query()->where('creator_id', $creatorId)->get();

        return view('results', ['podcasts' => $podcasts]);
    }
}
