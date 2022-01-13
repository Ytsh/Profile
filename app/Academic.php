<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable =[
        'equivalent','grade','university','p_year','user_id'];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
