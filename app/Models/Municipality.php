<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $table = "municipalities";  
    protected $fillable =  ['id','id_state'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getState() {
        return $this->belongsTo(State::class, 'id_state');
    }
}
