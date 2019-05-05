<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
/*
public $naziv;
public $opis;
public $obavljeni_poslovi;
public $datum_početka;
public $datum_završetka;
public $id_voditelja;
*/
 protected $table = 'projects';
  protected $fillable = ['id','Naziv','Opis','Obavljeni_poslovi','Datum_početka','Datum_završetka','id_voditelja'];
    public $timestamps = false;
    //
}
