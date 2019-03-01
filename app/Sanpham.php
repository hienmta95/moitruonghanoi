<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $fillable = [
        'id', 'title', 'created_at', 'updated_at', 'description', 'image_id', 'slug', 'noidung', 'loaisanpham_id', 'title_en', 'description_en', 'noidung_en', 'catalogs'
    ];

    protected $hidden = [
        //
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }

    public function loaisanpham()
    {
        return $this->belongsTo(Loaisanpham::class, 'loaisanpham_id', 'id');
    }
}
