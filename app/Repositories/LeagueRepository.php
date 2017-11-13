<?php

namespace App\Repositories;

use App\Models\League;

class LeagueRepository extends BaseRepository
{
    public function model()
    {
        return League::class;
    }
}