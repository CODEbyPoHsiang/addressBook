<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['Fname', 'Lname', 'Email', 'Phone','Address','ImgPath'];
}
