<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // it automatically connects to Teacher table because it shares the same name

    // if the table name is different from the model name, we need to specify the table name
    // protected $table = 'teachers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

}
