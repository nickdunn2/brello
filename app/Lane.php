<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lane extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the tasks that belong to this lane.
     */
    public function tasks() {
        return $this->hasMany('App\Task');
    }
}
