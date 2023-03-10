<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    protected $fillable = ['NAME','SURNAME','TELEPHONE','STREET','CITY','COUNTRY'];

    protected $table = 'people';

    use HasFactory;
}
