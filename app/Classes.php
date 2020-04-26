<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public $timestamps = true;
    protected $primarykey = 'id';
    protected $fillable = [
        'weekDay', 'classStart','classEnd', 'courseId', 'created_at', 'updated_at',
    ];
}
