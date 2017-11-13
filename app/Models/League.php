<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "leagues";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'flag', 'slug'];
}