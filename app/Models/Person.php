<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = "people";  
    protected $fillable = ['id','fist_name','first_surname','email','phone','id_users'];
    protected $connection = "psql";
    public $timestamps = false;

    public function getNameComplete() {
		return $this->fist_name + ' '+ $this->first_surname;
	} 

  	public function getUser() {
        return $this->belongsTo(User::class, 'id_users');
    }
}
