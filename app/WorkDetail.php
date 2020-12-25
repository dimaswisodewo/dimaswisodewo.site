<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'work_id',
        'description',
        'lessons_learned',
        'source_code',
        'downloadable_file',
    ];

    protected $hidden = [

    ];

    // Table Relation
    public function works() {
        return $this->belongsTo(Work::class, 'work_id', 'id');
    }
}
