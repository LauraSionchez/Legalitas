<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbTable extends Model
{
    use HasFactory;

    protected $table = "tb_tables";  
    protected $fillable =  ['id','description','status'];
    protected $connection = "psql";
    public $timestamps = false;
}
