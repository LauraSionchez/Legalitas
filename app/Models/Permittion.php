<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permittion extends Model
{
    use HasFactory;

    protected $table = "permittions";  
    protected $fillable =  ['id','actions','id_users','id_submodules'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getUser() {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function getSubmodules() {
        return $this->belongsTo(Submodule::class, 'id_submodules');
    }
}
