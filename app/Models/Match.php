<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "matchs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['league_id', 'from', 'to', 'tittle', 'slug'];
}