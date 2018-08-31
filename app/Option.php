<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['name', 'description', 'keys', 'email', 'tel1', 'tel2', 'tel3', 'tel4', 'instagram', 'whatsapp', 'banner_action'];
}
