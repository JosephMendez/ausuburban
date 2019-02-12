<?php

namespace JosephMmendez\Gazetteer\Models;

use Illuminate\Database\Eloquent\Model;

class Suburb extends Model 
{
	/**
	 * table used by this Model
	 * @var string
	 */
	protected $table = "suburbs";

	/**
     * timestamps are not required for this table
     * @var boolean
     */
    public $timestamps = false;

    /**
     * mass assignable attributes
     * @var [type]
     */
    protected $fillable = ['postcode', 'suburb', 'state', 'lat', 'lon'];


    /**
     * State model belongs to Country model
     * @return [type] [description]
     */
    public function state()
    {
        return $this->belongsTo('\JosephMmendez\Gazetteer\Models\State', 'state', 'code');
    }

}