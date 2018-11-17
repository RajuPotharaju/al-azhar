<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contact_messages';
    protected $fillable = ['contacted_id','message','reason'];
}
