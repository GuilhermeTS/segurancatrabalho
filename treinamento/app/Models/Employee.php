<?php

namespace treinamento\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];

    protected $table = 'employees';

}
