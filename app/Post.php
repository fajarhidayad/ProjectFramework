<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $fillable = [
        'foto', 'title', 'tags',
    ];

    protected $guarded = ['id']; 

    public function user() {
        return $this->belongsTo('App\User', 'id_user');
    }
    
    public function tags() {
        return $this->belongsTo('App\Tags', 'id_tag');
    }
}
