<?php

namespace App\Repositories;

use App\Models\Comentario;
use InfyOm\Generator\Common\BaseRepository;

class ComentarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuario_id',
        'hotel_id',
        'comentario',
        'calificacion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comentario::class;
    }
}
