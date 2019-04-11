<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = ['name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $hidden = ['updated_at', 'deleted_at'];

	/**
	 * 
	 */
	public function products()
	{
		return $this->belongsToMany('App\Product');
	}

	/**
	 * 
	 */
	public function creator()
	{
		return $this->belongsTo('App\User');
	}
}
