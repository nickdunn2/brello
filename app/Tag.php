<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'color'
    ];

    /**
     * Get the tasks associated with this tag.
     */
    public function tasks() {
        return $this->belongsToMany('App\Task');
    }
}
