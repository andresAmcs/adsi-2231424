<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [ /* el id es un incremento automatico por eso no se pone el id */
        'name',
        'image',
        'description',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category'); // belongsTo pertenece a
    }
}
