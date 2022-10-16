<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FailedLogin extends Model
{
    use HasFactory;

    protected $table = "failed_logins";  
    protected $fillable = ['id','status','id_users'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getUser() {
        return $this->belongsTo(User::class, 'id_users');
    }
}
