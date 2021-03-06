<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaiduan extends Model
{
    protected $fillable = [
        'id', 'title', 'created_at', 'updated_at', 'description', 'slug', 'title_en', 'description_en'
    ];

    protected $hidden = [
        //
    ];

    public function duan()
    {
        return $this->hasMany(Duan::class, 'loaiduan_id', 'id');
    }

}
