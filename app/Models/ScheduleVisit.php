<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleVisit extends Model
{
    use HasFactory;
    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'Phone',
        'PurposeofVisit',
        'VisitDate',
        'Message',
    ];
        
}
