<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Fornecedor $fornecedor
 * @property int $mod_id
 * @property int $for_id
 * @property string $mod_nome
 */
class Modelo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'modelo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'mod_id';

    /**
     * @var array
     */
    protected $fillable = ['for_id', 'mod_nome'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fornecedor()
    {
        return $this->belongsTo('App\Fornecedor', 'for_id', 'for_id');
    }
}
