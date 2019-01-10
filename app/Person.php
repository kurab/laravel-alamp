<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table = 'person';
    protected $primaryKey = 'id';
    protected $encrypted = [];
    protected $guarded = ['id', 'create_at', 'update_at'];
}
