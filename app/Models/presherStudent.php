<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presherStudent extends Model
{
    use HasFactory;
    protected $PrimaryKey = 'id';
    public $timestamps = false;
    public $fillable = ['name', 'gender', 'salary', 'designation'];
}
