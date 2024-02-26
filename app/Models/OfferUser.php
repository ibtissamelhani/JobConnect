<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class OfferUser extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable=[
        'description',
        'offer_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
