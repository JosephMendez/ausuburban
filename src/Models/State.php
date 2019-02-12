<?php

namespace Subbe\Gazetteer\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model 
{
	/**
	 * table used by this Model
	 * @var string
	 */
	protected $table = "states";

	/**
     * timestamps are not required for this table
     * @var boolean
     */
    public $timestamps = false;

    /**
     * mass assignable attributes
     * @var [type]
     */
    protected $fillable = ['code', 'name', 'active', 'country_code'];

    protected $hidden = ['active', 'country_code'];

    /**
     * State model belongs to Country model
     * @return [type] [description]
     */
    public function country()
    {
        return $this->belongsTo('\Subbe\Gazetteer\Models\Country', 'country_code', 'code');
    }

    public function suburbs()
    {
        return $this->hasMany('\Subbe\Gazetteer\Models\Suburb', 'code', 'state');
    }

}