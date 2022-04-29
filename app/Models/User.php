<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
{
    use Notifiable;
    use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function favorites(){
        return $this->belongsToMany('App\Models\Cocktail', 'favorites', 'user_id', 'cocktail_id')->withTimestamps();
    }

    public function base_user(){
        return $this->belongsToMany('App\Models\Base', 'base_user', 'user_id', 'base_id')->withTimestamps();
    }

    public function split_user(){
        return $this->belongsToMany('App\Models\Split', 'split_user', 'user_id', 'split_id')->withTimestamps();
    }
}
