<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ordenes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Numero', 'idMesa'];

    public function mesa()
    {
        return $this->belongsTo('App\Mesa','idMesa');
    }
    public function cuenta()
    {
        return $this->hasOne('App\Cuenta');
    }
    public function detalleorden()
    {
        return $this->hasMany('App\DetalleOrden');
    }
    
}
