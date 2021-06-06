<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Foto
 *
 * @property $id
 * @property $Autor
 * @property $Descripción
 * @property $Precio
 * @property $created_at
 * @property $updated_at
 *
 * @property FotosProducto[] $fotosProductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Foto extends Model
{
    
    static $rules = [
		'Autor' => 'required',
		'Descripción' => 'required',
		'Precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Autor','Descripción','Precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fotosProductos()
    {
        return $this->hasMany('App\Models\FotosProducto', 'foto_id', 'id');
    }

    

}
