<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;
use Spatie\MediaLibrary\Models\Media;

class Room extends Model implements HasMedia
{

    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;


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
        return url('/admin/rooms/'.$this->getKey());
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->autoRegisterThumb200();
    }

    public function registerMediaCollections() {
        $this->addMediaCollection('gallery');
    }
}
