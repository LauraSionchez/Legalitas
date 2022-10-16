<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submodule extends Model
{
    use HasFactory;

    protected $table = "submodules";  
    protected $fillable =  ['id','description','code','status','id_modules'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getModules() {
        return $this->belongsTo(Module::class, 'id_modules');
    }
}
