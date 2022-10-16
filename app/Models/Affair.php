<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affair extends Model
{
    use HasFactory;

    protected $table = "affairs";  
    protected $fillable = ['id','date_in','date_out','status','id_clients','id_dossiers'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getClientsAtributtes() {
        return $this->getClients;
    }

    public function getDossiersAtributtes() {
        return $this->getDossiers;
    }

    public function getClients() {
        return $this->belongsTo(Client::class, 'id_clients');
    }

    public function getDossiers() {
        return $this->belongsTo(Dossier::class, 'id_dossiers');
    }
}
