<?php

namespace App\Http\Controllers;

use App\Models\Podcast;

class SearchController extends Controller
{
    public function __invoke()
    {
        $searchQuery = request('q');

        $podcasts = Podcast::query()
            ->with(['creator', 'tags'])
            ->where('title', 'Like', '%'.$searchQuery.'%')
            ->orWhereHas('creator', function ($query) use ($searchQuery) {
                // Search by creator name
                $query->where('name', 'LIKE', '%' . $searchQuery . '%');
            })
            ->get();

        return view('results', ['podcasts' => $podcasts]);
    }
}
