<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadiNa extends Model
{

	 protected $table = 'table__radi_na';
    //

	    protected $fillable = ['id_radnika','id_projekta'];
	     public $timestamps = false;
}
