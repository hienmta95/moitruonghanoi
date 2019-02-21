<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaisanpham extends Model
{
    protected $fillable = [
        'id', 'title', 'created_at', 'updated_at', 'description', 'image_id', 'slug'
    ];


    protected $hidden = [
        //
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }

    public function sanpham()
    {
        return $this->hasMany(Sanpham::class, 'loaisanpham_id', 'id');
    }

}
