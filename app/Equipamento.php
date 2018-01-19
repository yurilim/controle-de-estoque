<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Fornecedor $fornecedor
 * @property TipoEquipamento $tipoEquipamento
 * @property int $eqp_id
 * @property int $for_id
 * @property int $tie_id
 * @property int $eqp_qtdTotal
 * @property int $eqp_patrimonio
 * @property int $eqp_imei
 * @property string $eqp_modelo
 * @property string $eqp_data_entrada
 * @property string $eqp_observacao
 * @property string $created_at
 * @property string $updated_at
 */
class Equipamento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'equipamento';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'eqp_id';

    /**
     * @var array
     */
    protected $fillable = ['for_id', 'tie_id', 'eqp_qtdTotal', 'eqp_patrimonio', 'eqp_imei', 'eqp_modelo', 'eqp_data_entrada', 'eqp_observacao', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fornecedor()
    {
        return $this->belongsTo('App\Fornecedor', 'for_id', 'for_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoEquipamento()
    {
        return $this->belongsTo('App\TipoEquipamento', 'tie_id', 'tie_id');
    }
}
