<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

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
        'agent_id',
        'city_id',
        'domain_id'
    ];

    public const STATUS=[
        1 => 'pending',
        2 => 'sent',
    ];

    public function agent(){
        $this->belongsTo(Agent::class);
    }

    public function domain(){
        $this->belongsTo(Domain::class);
    }

    public function city(){
        $this->belongsTo(City::class);
    }

    public function users()
    {
        $this->belongsToMany(User::class);
    }
    


}
