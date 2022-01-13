<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $fillable = [
        'c_profession','user_id'];

    public function experiences()
    {
        return $this->hasmany('App\Experience');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
