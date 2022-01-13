<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

    protected $fillable = [
        'experience','professional_id'];

    public function professionals()
    {
        return $this->belongsToMany('App\Professional');
    }
}
