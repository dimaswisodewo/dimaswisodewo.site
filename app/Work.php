<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'project_date',
        'short_description',
        'project_type'
    ];

    protected $hidden = [

    ];

    // Table Relation
    public function details() {
        return $this->hasOne(WorkDetail::class, 'work_id', 'id');
    }

    public function platforms() {
        return $this->hasMany(WorkPlatform::class, 'work_id', 'id');
    }

    public function technologies() {
        return $this->hasMany(WorkTechnology::class, 'work_id', 'id');
    }

    public function roles() {
        return $this->hasMany(WorkRole::class, 'work_id', 'id');
    }

    public function screenshots() {
        return $this->hasMany(Screenshot::class, 'work_id', 'id');
    }

    public function videos() {
        return $this->hasMany(Video::class, 'work_id', 'id');
    }
}
