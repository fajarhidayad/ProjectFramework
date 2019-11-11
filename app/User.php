<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = []; 

    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    protected $primaryKey = 'id';

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

    public function perans(){
        return $this->belongsToMany('App\Peran');
    }

    public function hasAnyPerans($perans){
        return null !== $this->perans()->whereIn('name', $perans)->first();
    }

    public function hasAnyPeran($peran){
        return null !== $this->perans()->where('name', $peran)->first();
    }

    public function post() {
        return $this->hasMany('App\User');
    }
 }
