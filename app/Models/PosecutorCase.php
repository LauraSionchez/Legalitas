<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosecutorCase extends Model
{
    use HasFactory;

    protected $table = "posecutor_cases";  
    protected $fillable = ['id','status','id_attorneys','id_affairs'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getAffairsAtributtes() {
        return $this->getAffairs;
    }

    public function getAttorneysAtributtes() {
        return $this->getAttorneys;
    }

    public function getAffairs() {
        return $this->belongsTo(Affair::class, 'id_affairs');
    }

    public function getAttorneys() {
        return $this->belongsTo(Attorney::class, 'id_attorneys');
    }
}
