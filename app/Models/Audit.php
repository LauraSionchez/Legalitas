<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $table = "audits";  
    protected $fillable = ['id','action','data_old','data_new','date','id_modules','id_users'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getUser() {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function getModules() {
        return $this->belongsTo(Module::class, 'id_modules');
    }
}
