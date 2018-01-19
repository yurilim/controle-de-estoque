<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Municipio[] $municipios
 * @property int $est_id
 * @property string $est_UF
 * @property string $created_at
 * @property string $updated_at
 */
class Estados extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'est_id';

    /**
     * @var array
     */
    protected $fillable = ['est_UF', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipios()
    {
        return $this->hasMany('App\Municipio', 'est_id', 'est_id');
    }
}
