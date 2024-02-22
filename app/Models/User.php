<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'position',
        'skill',
        'phone',
        'address',
        'description',
        'status',
    ];

    public const STATUS_RADIO = [
        '1'=> 'Pending',
        '2'=> 'Accepted',
        '3'=> 'Banned',
    ];


    // method to return the status

    public function getStatus(){
        return self::STATUS_RADIO[$this->status];
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    
    public function education()
    {
        return $this->hasMany(Education::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
