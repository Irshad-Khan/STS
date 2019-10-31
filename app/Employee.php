<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'address','cnic', 'mobile','city'];

    /**
     * Get the comments for the blog post.
     */
    public function workHistory()
    {
        return $this->hasMany(WorkHistory::class);
    }
}
