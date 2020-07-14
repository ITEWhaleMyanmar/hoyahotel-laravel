<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrentSpecialOffer extends Model
{
    protected $table = 'current_special_offer';

    protected $fillable = [
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/current-special-offers/'.$this->getKey());
    }
}
