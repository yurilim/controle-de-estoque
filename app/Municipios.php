<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Estado $estado
 * @property int $mun_id
 * @property int $est_id
 * @property string $mun_nome
 * @property string $mun_cep
 * @property string $mun_telefone
 * @property string $mun_email
 * @property string $created_at
 * @property string $updated_at
 */
class Municipios extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'mun_id';

    /**
     * @var array
     */
    protected $fillable = ['est_id', 'mun_nome', 'mun_cep', 'mun_telefone', 'mun_email', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo('App\Estado', 'est_id', 'est_id');
    }
}
