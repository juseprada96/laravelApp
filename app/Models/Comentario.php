<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comentario
 * @package App\Models
 * @version May 17, 2018, 5:33 am UTC
 */
class Comentario extends Model
{
    use SoftDeletes;

    public $table = 'comentarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'usuario_id',
        'hotel_id',
        'comentario',
        'calificacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'usuario_id' => 'integer',
        'hotel_id' => 'integer',
        'comentario' => 'string',
        'calificacion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'comentario'=>'required',
        'calificacion'=>'numeric',
        'calificacion'=>'required'
    ];

    public function hotel(){
        return $this->hasOne('App\Models\Hotel','id');
    }

    public function usuario(){
        return $this->hasOne('App\User','id','usuario_id');
    }

    
}
