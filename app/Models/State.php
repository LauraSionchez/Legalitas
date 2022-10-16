<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = "states";  
    protected $fillable =  ['id','code','description','status','id_region','id_countries'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getCountriesDescription() {
        return $this->getCountries->description;
    }

    public function getRegionDescription() {
        return $this->getRegion->description;
    }

    public function getRegion() {
        return $this->belongsTo(TbMaster::class, 'id_region');
    }

    public function getCountries() {
        return $this->belongsTo(Countries::class, 'id_countries');
    }
}
