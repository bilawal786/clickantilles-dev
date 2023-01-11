<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';
    protected $fillable = ['sitename','address','phone','email','logo','footer','facebook','instagram','twitter','utube','about','terms','privacy','help','return'];
}
