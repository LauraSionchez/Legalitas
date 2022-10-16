<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = "cities";  
    protected $fillable =  ['id','description','id_state','id_municipality'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getState() {
        return $this->belongsTo(State::class, 'id_state');
    }

    public function getMunicipality() {
        return $this->belongsTo(Municipality::class, 'id_municipality');
    }
}
