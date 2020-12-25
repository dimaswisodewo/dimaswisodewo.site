<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;
   
    protected $fillable = [
        'work_id',
        'video'
    ];

    protected $hidden = [

    ];

    // Table Relation
    public function works() {
        return $this->belongsTo(Work::class, 'work_id', 'id');
    }
}
