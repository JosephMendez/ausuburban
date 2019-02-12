<?php

namespace Subbe\Gazetteer\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model 
{
	/**
	 * table used by this Model
	 * @var string
	 */
	protected $table = "countries";

	/**
     * timestamps are not required for this table
     * @var boolean
     */
    public $timestamps = false;

    /**
     * mass assignable attributes
     * @var [type]
     */
    protected $fillable = ['code', 'name', 'active'];

    protected $hidden = ['active'];

    /**
     * Country model has many states
     * @return [type] [description]
     */
    public function states() 
    {
    	return $this->hasMany('\Subbe\Gazetteer\Models\State', 'country_code', 'code');
    }

}