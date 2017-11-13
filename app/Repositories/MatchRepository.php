<?php

namespace App\Repositories;

use App\Models\Match;

class MatchRepository extends BaseRepository
{
    public function model()
    {
        return Match::class;
    }
}