<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Congnghe extends Model
{
    protected $fillable = [
        'id', 'title', 'created_at', 'updated_at', 'description', 'image_id', 'slug', 'noidung', 'loaicongnghe_id', 'title_en', 'description_en', 'noidung_en'
    ];


    protected $hidden = [
        //
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }

    public function loaicongnghe()
    {
        return $this->belongsTo(Loaicongnghe::class, 'loaicongnghe_id', 'id');
    }
}
