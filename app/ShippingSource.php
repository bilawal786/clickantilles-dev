<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingSource extends Model
{
    protected $table = 'shipping_sources';
    protected $fillable = ['name','deliver_from','deliver_to','source','volume','time_required','status'];
}
