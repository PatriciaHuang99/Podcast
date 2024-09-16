<?php

namespace Database\Seeders;

use App\Models\Podcast;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PodcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();
        Podcast::factory(4)->hasAttached($tags)->create();
        
        Podcast::factory(25)->hasAttached($tags)->create(new Sequence(
        ['listening_count_more_than_1000' => false], 
        ['listening_count_more_than_1000' => true], 
    ));
    }
}
