<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    public $timestamps = true;
    public $table = 'studentclasses';
    protected $primarykey = 'id';
    protected $fillable = [
        'courseId', 'accountId','created_at', 'updated_at',
    ];
}
