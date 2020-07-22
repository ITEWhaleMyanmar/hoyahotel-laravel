<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;
use Spatie\MediaLibrary\Models\Media;

class ThingsToDo extends Model implements HasMedia
{
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;
   
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

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
              ->width(690)
              ->height(690);
    }

    public function registerMediaCollections() {
        $this->addMediaCollection('gallery');
    }
   
}
