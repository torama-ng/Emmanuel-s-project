<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'jobform';

    public $primaryKey = 'id';

     protected $fillable = ['jobtitle', 'companyname',
      'company_description',
      'location',
      'jobtype',
      'company_website',
      'jobcategory',
      'closing_date',
      'application_notify_email',
      'salary_offer',
      'experience_level',
      'total_years',
      'academic_degree',
      'dress_code',
      'job_description',
      'working_hours',
      'google',
      'facebook',
      'instagram',
      'linkedin',
      'cover_image',
      'cover_image2',
      'company_name'
    ];

    public $timestamps = true;

  
}
