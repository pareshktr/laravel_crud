<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StudentController;

class student extends Model
{
    protected $table = 'students';
    protected $fillable = ['name','course','address','mobile'];
}
