<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";  
    protected $fillable = ['id','fist_name','fist_surname','email','phone','work_space','urbanization','status','id_states','id_cities','id_municipalities','id_parishes'];
    protected $connection = "psql";
    public $timestamps = false;


    public function getStateDescription() {
        return $this->getState->description;
    }

    public function getCityDescription() {
        return $this->getCity->description;
    }

    public function getMunicipalityDescription() {
        return $this->getMunicipality->description;
    }

    public function getParishDescription() {
        return $this->getParish->description;
    }

    public function getState() {
        return $this->belongsTo(State::class, 'id_state');
    }

    public function getCity() {
        return $this->belongsTo(cities::class, 'id_cities');
    }

    public function getMunicipality() {
        return $this->belongsTo(Municipality::class, 'id_municipality');
    }

    public function getParish() {
        return $this->belongsTo(Parish::class, 'id_parishes');
    }

}
