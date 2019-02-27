<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class CottonSymptom extends Model
{
    use Translatable;
    protected $translatable = ['name', 'question'];
}
