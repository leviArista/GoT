<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable= ['Descripcion','fan_id'];

    public function fan(){
        return $this->belongsTo(Fan::class);
    }
}
