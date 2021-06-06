<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $Nombre de Producto
 * @property $Precio
 * @property $Descripcion
 * @property $sku
 * @property $created_at
 * @property $updated_at
 *
 * @property FotosProducto $fotosProducto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Precio' => 'required',
		'Descripcion' => 'required',
		'sku' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Precio','Descripcion','sku'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fotosProducto()
    {
        return $this->hasOne('App\Models\FotosProducto', 'producto_id', 'id');
    }
    
    public function fotos(){
      return $this->hasMany("App\Models\productos_fotos");
    }

}
