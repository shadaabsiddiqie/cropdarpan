<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class CottonProblem extends Model
{
    use Translatable;
    protected $translatable = ['common_name', 'scientific_name', 'advise'];
}
