<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = true;
    protected $primarykey = 'id';
    protected $fillable = [
        'courseName', 'courseStartDate','courseEndDate', 'accountId', 'created_at', 'updated_at',
    ];
}
