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
        'company_id',
    ];

    public const STATUS_RADIO = [
        '1'=> 'Accepted',
        '2'=> 'Banned',
    ];

    /**
     * Update the specified resource in storage.
     */
    public static function updateCompanyId($id, $newCompanyId){
        $user = User::findOrFail($id);
        $user->company_id = $newCompanyId;
        $user->save();
    }


    // method to return the status

    public function getStatus(){
        return self::STATUS_RADIO[$this->status];
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    
    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class, 'offer_users');
    }


    public function agentOffers()
    {
        return $this->hasMany(Offer::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
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
