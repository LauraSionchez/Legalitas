<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    protected $table = "countries";  
    protected $fillable =  ['id','code','description','code_phone','status'];
    protected $connection = "psql";
    public $timestamps = false;
}
