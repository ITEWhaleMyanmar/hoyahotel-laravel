<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactU extends Model
{
    protected $fillable = [
        'email',
        'phone',
        'address',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/contact-us/'.$this->getKey());
    }
}
