<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'title',
        'contract',
        'min_salary',
        'max_salary',
        'duration',
        'period',
        'experience',
        'description',
        'status',
        'user_id',
        'city_id',
        'domain_id'
    ];

    public const STATUS=[
        1 => 'pending',
        2 => 'sent',
    ];

    public function getStatus(){

        return self::STATUS[$this->status];
    }
    public function user(){
       return $this->belongsTo(User::class);
    }

    public function domain(){
        return $this->belongsTo(Domain::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }



}
