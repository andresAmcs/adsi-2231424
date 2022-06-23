<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [ /* el id es un incremento automatico por eso no se pone el id */
        'name',
        'image',
        'description',
    ];

    //relationship
    public function games(){
        return $this->hasMany('App\Models\Game');
    }
}
