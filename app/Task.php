<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    // Static function to list incomplete tasks
    // App\Task::incomplete();
    /*
    public static function incomplete()
    {
        return static::where('completed', 0)->get();
    }
    */

    // Add query scope for incomplete tasks to enable chaining
    // App\Task::incomplete()->where('id', '>=', 2)->get();
    public function scopeIncomplete($query)
    {
        return $query->where('completed', 0);
    }
}
