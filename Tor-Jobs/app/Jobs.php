<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'jobform';

    public $primaryKey = 'id';

     protected $fillable = ['firstname', 'lastname', 'description','users_image'];

    public $timestamps = true;
}
