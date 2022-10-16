<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = "modules";  
    protected $fillable =  ['id','description','code','logo','status'];
    protected $connection = "psql";
    public $timestamps = false;
}
