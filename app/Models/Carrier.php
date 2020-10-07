<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    protected $table = 'carriers';
    protected $fillable = ['designation', 'educational_qualification', 'work_experience', 'role', 'status'];
    protected $primaryKey = 'id';
}
