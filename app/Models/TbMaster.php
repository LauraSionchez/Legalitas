<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbMaster extends Model
{
    use HasFactory;

    protected $table = "tb_masters";  
    protected $fillable =  ['id','description','status','id_tb_tables'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getTbTable() {
        return $this->belongsTo(TbTable::class, 'id_tb_tables');
    }
}
