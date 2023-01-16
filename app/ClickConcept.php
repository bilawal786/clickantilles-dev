<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClickConcept extends Model
{
    public function products()
    {
        return $this->hasMany(Products::class, 'click_concept');
    }
}
