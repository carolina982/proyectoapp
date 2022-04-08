<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detall
 *
 * @property $id_detall
 * @property $id_service
 * @property $detall
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Sale[] $sales
 * @property Service $service
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detall extends Model
{
    
    static $rules = [
		'id_detall' => 'required',
		'id_service' => 'required',
		'detall' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_detall','id_service','detall','price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Sale', 'id_detall', 'id_detall');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function service()
    {
        return $this->hasOne('App\Service', 'id_service', 'id_service');
    }
    

}
