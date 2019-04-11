<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = ['name', 'price', 'description'];
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $hidden = ['updated_at', 'deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $casts = [
		'price' => 'decimal:2',
	];

    /**
     * 
     */
	public function categories()
	{
		return $this->belongsToMany('App\Category');
	}

    /**
     * 
     */
	public function creator()
	{
		return $this->belongsTo('App\User');
	}
}
