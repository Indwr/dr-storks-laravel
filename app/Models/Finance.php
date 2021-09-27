<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;
    protected $table = 'finance';
    protected $fillable = ['user_id','laboratory','radiology','consultation','general_medicine','procedures','other','room_charges','nurse_care','doctor_visit','physiotherapy','accounts','operation_theater','pharmacy','therapeutic','driver'];
}
