<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Equipamento[] $equipamentos
 * @property Modelo[] $modelos
 * @property int $for_id
 * @property string $for_nome
 * @property string $for_cnpj
 * @property string $for_endereco
 * @property string $for_telefone
 * @property string $for_email
 * @property string $created_at
 * @property string $updated_at
 */
class Fornecedor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'fornecedor';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'for_id';

    /**
     * @var array
     */
    protected $fillable = ['for_nome', 'for_cnpj', 'for_endereco', 'for_telefone', 'for_email', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipamentos()
    {
        return $this->hasMany('App\Equipamento', 'for_id', 'for_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelos()
    {
        return $this->hasMany('App\Modelo', 'for_id', 'for_id');
    }
}
