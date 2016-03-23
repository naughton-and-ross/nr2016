<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['featured_pos', 'project_name', 'project_catagory', 'project_desc', 'project_info'];

    public function scopeFeatured($query)
    {
        return $query->where('featured_pos', '>', 0);
    }
}
