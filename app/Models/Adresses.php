<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresses extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'street_name',
        'street_number',
        'zip',
        'city',
        'siblings_num',
    ];
}
