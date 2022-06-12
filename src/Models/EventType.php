<?php

namespace SquadMS\Calendar\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];   
}
