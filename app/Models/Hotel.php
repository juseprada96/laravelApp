<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hotel
 * @package App\Models
 * @version May 17, 2018, 5:31 am UTC
 */
class Hotel extends Model
{
    use SoftDeletes;

    public $table = 'hotels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'ciudad',
        'costo',
        'estrellas',
        'imagen'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'ciudad' => 'string',
        'costo' => 'integer',
        'estrellas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'ciudad' => 'required',
        'costo' => 'required',
        'estrellas' => 'required',
        'costo' => 'numeric',
        'estrellas' => 'numeric',
        'imagen'=>'required'
    ];

    public function comentarios(){
        return $this->hasMany('App\Models\Comentario');
    }
}
