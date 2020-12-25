<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Screenshot extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'work_id',
        'image'
    ];

    protected $hidden = [

    ];

    // Table Relation
    public function works() {
        return $this->belongsTo(Work::class, 'work_id', 'id');
    }
}
