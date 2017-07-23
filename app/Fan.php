<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
    protected $fillable= ['nombre','apellido','edad','sexo'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
