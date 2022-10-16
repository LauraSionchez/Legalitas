<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    use HasFactory;

    protected $table = "parishes";  
    protected $fillable =  ['id','description','id_municipality'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getMunicipality() {
        return $this->belongsTo(Municipality::class, 'id_municipality');
    }
}
