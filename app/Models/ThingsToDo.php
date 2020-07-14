<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThingsToDo extends Model
{
    protected $table = 'things_to_do';

    protected $fillable = [
        'title',
        'perex',
        'published_at',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/things-to-dos/'.$this->getKey());
    }
}
