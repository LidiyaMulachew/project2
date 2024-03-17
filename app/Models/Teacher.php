<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $fillable = ['First_name','Middle_name','Last_name','Age','Education_level','Teaching'];
    use HasFactory;
}
