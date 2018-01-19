<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Equipamento[] $equipamentos
 * @property int $tie_id
 * @property string $tie_nome
 * @property string $created_at
 * @property string $updated_at
 */
class TipoEquipamento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tipo_equipamento';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'tie_id';

    /**
     * @var array
     */
    protected $fillable = ['tie_nome', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipamentos()
    {
        return $this->hasMany('App\Equipamento', 'tie_id', 'tie_id');
    }
}
