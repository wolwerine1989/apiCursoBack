<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','email','telefono','mensaje'];
    
    use HasFactory;
}
