<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function scopeFeatured($query)
    {
        return $query->where('featured_pos', '>', 0);
    }
}
