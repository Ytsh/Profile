<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = [
        'name', 'email', 'father_name', 'mother_name','grandfather_name','ward','address','phone','user_id'];
   
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
