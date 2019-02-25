<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaicongnghe extends Model
{
    protected $fillable = [
        'id', 'title', 'created_at', 'updated_at', 'description', 'image_id', 'slug', 'title_en', 'description_en'
    ];


    protected $hidden = [
        //
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }

    public function congnghe()
    {
        return $this->hasMany(Congnghe::class, 'loaicongnghe_id', 'id');
    }

}
