<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['child_id','transferee','estimated_time','body_temperature','sheduled_date'];
}
