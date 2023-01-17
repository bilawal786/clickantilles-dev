<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    protected $table = 'website_slides';
    protected $fillable = ['mainbg','mainbgheading','mainbgdescription','slide1','slide2','slide3','slide4','slide5','image1','image2','image3','image4','image5','image6','image7','image8'];
    protected $dates = ['timer'];

}
