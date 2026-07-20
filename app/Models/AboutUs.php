<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{

    protected $table = 'about_us';

    protected $fillable = [
        'story_image',
        'story_description',

        'stat1_icon',
        'stat1_number',
        'stat1_label',
        'stat2_icon',
        'stat2_number',
        'stat2_label',
        'stat3_icon',
        'stat3_number',
        'stat3_label',
        'stat4_icon',
        'stat4_number',
        'stat4_label',

        'mission_description',
        'vision_description',

        'journey1_icon',
        'journey1_description',
        'journey2_icon',
        'journey2_description',
        'journey3_icon',
        'journey3_description',
        'journey4_icon',
        'journey4_description',
    ];
}
