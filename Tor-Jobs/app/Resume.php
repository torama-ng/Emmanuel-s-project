<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = 'resume';

    public $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'specialty',
        'location',
        'education_school',
        'education_qualification',
        'education_date',
        'education_note',
        'experience_employer',
        'experience_job',
        'experience_date',
        'experience_note',
        'skill_name',
        'skill_percent',
    ];

    public $timestamps = true;
}
