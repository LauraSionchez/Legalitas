<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "users";  
    protected $fillable = ['id','username','password','change_password','status','id_user_type'];
    protected $connection = "psql";
    public $timestamps = false;

	public function getUserType() {
        return $this->belongsTo(TbMaster::class, 'id_user_type');
    } 
}
