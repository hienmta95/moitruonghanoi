<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'id', 'phone', 'created_at', 'updated_at',
        'tencongty', 'emailcongty', 'tel1', 'tel2', 'truso', 'facebook', 'youtube',
        'gioithieu', 'count', 'gioithieu_en', 'emailcongty2', 'tencongty_en',
        'truso2', 'tel3', 'tel4', 'emailcongty3', 'emailcongty4', 'tuyendung', 'tuyendung_en'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
