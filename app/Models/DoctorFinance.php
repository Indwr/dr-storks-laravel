<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorFinance extends Model
{
    use HasFactory;
    protected $table = 'doctor_finance';
    protected $fillable = ['user_id','type','amount','amount_in_percent'];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
