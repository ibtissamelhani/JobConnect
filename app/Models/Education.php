<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'institute',
        'degree',
        'year',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
