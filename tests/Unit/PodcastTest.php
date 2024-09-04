<?php

use App\Models\Creator;
use App\Models\Podcast;

it('it belongs to a creator', function () {
    // Arange Act Assert
    $creator = Creator::factory()->create();
    $podcast = Podcast::factory()->create([
        'creator_id' => $creator->id,
    ]);

    expect($podcast->creator->is($creator))->toBeTrue();
});

it('can have tags', function() {
    $podcast = Podcast::factory()->create();

    $podcast->tag('Art');

    expect($podcast->tags)->toHaveCount(1);
});
