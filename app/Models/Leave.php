<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_name',
        'emp_id',
        'emp_email',
        'emp_position',
        'start_date',
        'end_date',
        'reason'
    ];
}
