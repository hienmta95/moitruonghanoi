<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $fillable = [
        'id', 'title', 'created_at', 'updated_at', 'description', 'image_id', 'slug', 'noidung', 'loaisanpham_id', 'title_en', 'description_en', 'noidung_en', 'catalogs1', 'active1', 'catalogs2', 'active2', 'catalogs3', 'active3', 'catalogs4', 'active4', 'catalogs5', 'active5', 'catalogs6', 'active6', 'catalogs7', 'active7', 'catalogs8', 'active8', 'catalogs9', 'active9', 'catalogs10', 'active10'
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
